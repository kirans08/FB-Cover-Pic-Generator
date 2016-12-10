<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'Mobile_Detect.php';

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function login()
    {

        $this->load->library('facebook');

        $data['login_url'] = $this->facebook->getLoginUrl(array(
            'redirect_uri' => base_url('select_profile'),
            'scope' => 'publish_actions, user_photos'
        ));
        $this->load->view('login', $data);

    }

    public function select_profile()
    {
        $this->load->library('facebook');
        $this->load->library('session');
        $user = $this->facebook->getUser();
        if ($user) {
            try {
                $permissions = $this->facebook->api('/me/permissions');
                if (strcmp($permissions['data'][0]['status'], 'granted') || strcmp($permissions['data'][1]['status'], 'granted') || strcmp($permissions['data'][2]['status'], 'granted')) {
                    $user = NULL;
                }
            } catch (FacebookApiException $e) {
                $user = NULL;
            }
        }

        if (!$user) {
            redirect('');
        }
        try {

            $userdata = $this->facebook->api('/me');

            $newdata = array(
                'userid' => $userdata['id']
            );

            $this->session->set_userdata($newdata);

        } catch (FacebookApiException $e) {
            redirect('', 'location');
        }

        try {

            $result = $this->facebook->api('/me/albums');
            $albumlist = $result['data'];
            foreach ($albumlist as $album) {
                if (!strcmp($album['name'], 'Profile Pictures')) {
                    $profile_album_id = $album['id'];
                    break;
                }

            }
            $result = $this->facebook->api('/' . $profile_album_id . '/photos');
            $profile_list = $result['data'];
            $i = 0;
            foreach ($profile_list as $profile_pic) {

                $result = $this->facebook->api($profile_pic['id'] . '?fields=images');
                $image_data = $result['images'];
                $url[$i] = $image_data[0]['source'];
                $i++;

            }

        } catch (FacebookApiException $e) {
            $user = NULL;
        }

        $data['url'] = $url;

        $newdata = array(
            'album_id' => $profile_album_id
        );

        $this->session->set_userdata($newdata);
        $this->load->view('profile', $data);

    }

    public function crop_profile()
    {
        $this->load->helper('url');

        $this->load->library('facebook');
        $this->load->library('session');

        $picid = 0;
        $picid = $this->uri->segment(2, 0);
        $newdata = array(
            'picid' => $picid
        );

        $this->session->set_userdata($newdata);
        if ($picid == 0) {


            redirect('select_profile', 'location');
        }
        $user = $this->facebook->getUser();
        if ($user) {
            try {
                $permissions = $this->facebook->api('/me/permissions');
                if (strcmp($permissions['data'][0]['status'], 'granted') || strcmp($permissions['data'][1]['status'], 'granted') || strcmp($permissions['data'][2]['status'], 'granted')) {
                    $user = NULL;
                }
            } catch (FacebookApiException $e) {
                $user = NULL;
            }
        }

        if (!$user) {
            redirect('');
        }

        $profile_album_id = $this->session->userdata('album_id');

        try {

            $result = $this->facebook->api('/' . $profile_album_id . '/photos');
            $profile_list = $result['data'];

            $result = $this->facebook->api($profile_list[$picid - 1]['id'] . '?fields=images');
            $image_data = $result['images'];
            $url = $image_data[0]['source'];


        } catch (FacebookApiException $e) {
            $user = NULL;
        }

        $data['url'] = $url;
        $img = imagecreatefromjpeg($url);
        $userid = $this->session->userdata('userid');

        $outputUrl = './assets/img/org_profile' . $userid . '.jpg';
        imagejpeg($img, $outputUrl);

        $userid = $this->session->userdata('userid');
        $data['userid'] = $userid;
        $this->load->view('crop', $data
        );

    }

    public function select_cover()
    {
        $this->load->library('facebook');
        $user = $this->facebook->getUser();
        if ($user) {
            try {
                $permissions = $this->facebook->api('/me/permissions');
                if (strcmp($permissions['data'][0]['status'], 'granted') || strcmp($permissions['data'][1]['status'], 'granted') || strcmp($permissions['data'][2]['status'], 'granted')) {
                    $user = NULL;
                }
            } catch (FacebookApiException $e) {
                $user = NULL;
            }
        }

        if (!$user) {
            redirect('');
        }
        $data['picid'] = $this->session->userdata('picid');

        $this->load->view('select', $data);
    }

    public function create_cover()
    {


        $this->load->library('facebook');
        $user = $this->facebook->getUser();
        if ($user) {
            try {
                $permissions = $this->facebook->api('/me/permissions');
                if (strcmp($permissions['data'][0]['status'], 'granted') || strcmp($permissions['data'][1]['status'], 'granted') || strcmp($permissions['data'][2]['status'], 'granted')) {
                    $user = NULL;
                }
            } catch (FacebookApiException $e) {
                $user = NULL;
            }
        }

        if (!$user) {
            redirect('');
        }

        $coverId = $this->uri->segment(2, 0);
        $coverUrl = './assets/img/cover' . $coverId . '.png';
        $coverImage = imagecreatefrompng($coverUrl);

        try {
            $userdata = $this->facebook->api('/me');
        } catch (FacebookApiException $e) {
        }
        $userid = $this->session->userdata('userid');

        $profileUrl = './assets/img/profile' . $userid . '.png';
        $profileImage = imagecreatefrompng($profileUrl);
        imagecopy($profileImage, $coverImage, 0, 0, 0, 0, 851, 315);
        $userid = $this->session->userdata('userid');

        $outputUrl = "./assets/img/temp" . $userid . ".jpg";

        imagejpeg($profileImage, $outputUrl);
        $data['outputUrl'] = $outputUrl . '?' . time();
        $userid = $this->session->userdata('userid');
        $data['userid'] = $userid;

        $data['picid'] = $this->session->userdata('picid');
        $this->load->view('cover', $data);

    }

    public function post_cover()
    {

        $this->load->library('facebook');
        try {
            $userdata = $this->facebook->api('/me');
        } catch (FacebookApiException $e) {
        }

        $userid = $this->session->userdata('userid');
        $outputUrl = "./assets/img/temp" . $userid . ".jpg";

        $this->facebook->setFileUploadSupport(true);
        $args = array();
        $args['image'] = '@' . realpath($outputUrl);

        $data = $this->facebook->api('/me/photos', 'post', $args);
        unlink($outputUrl);
        unlink('./assets/img/org_profile' . $userid . '.jpg');
        unlink('./assets/img/profile' . $userid . '.png');

        // Any mobile device (phones or tablets).
        $detect = new Mobile_Detect;

        if ($detect->isMobile()) {
            redirect('https://m.facebook.com/timeline/cover/reposition/?cpid=' . $data['id'] . '&redirect_uri', 'location');
        } else {
            redirect('https://www.facebook.com/profile.php?preview_cover=' . $data['id'], 'location');
        }

    }

    public function privacy()
    {

        $this->load->view('privacy', NULL);
    }

    public function save()
    {

        $x = $this->input->post('x', TRUE);
        $y = $this->input->post('y', TRUE);
        $w = $this->input->post('w', TRUE);
        $h = $this->input->post('h', TRUE);
        $userid = $this->session->userdata("userid");

        $img = imagecreatefromjpeg('./assets/img/org_profile' . $userid . '.jpg');
        $to_crop_array = array('x' => $x, 'y' => $y, 'width' => $w, 'height' => $h);


        $cropImg = imagecreatetruecolor($w, $h);
        imagecopy($cropImg, $img, 0, 0, $x, $y, $w, $h);

        // Load
        $resized = imagecreatetruecolor(315, 315);

        // Resize
        imagecopyresized($resized, $cropImg, 0, 0, 0, 0, 315, 315, $w, $h);
        $new = imagecreatetruecolor(851, 315);
        imagecopy($new, $resized, 536, 0, 0, 0, 315, 315);

        // Output
        imagepng($new, './assets/img/profile' . $userid . '.png');

        redirect('select_cover', 'location');

    }

}

