<?php
/**
 * Created by PhpStorm.
 * User: Nidhal65
 * Date: 18/11/2018
 * Time: 22:26
 */

namespace EpisodesBundle\Services;

use Unirest\Request;


class CallAPI
{
    const URL = 'http://adneomapisubject.herokuapp.com/blackmirror';

    const HEADERS = ['Accept' => 'application/x-www-form-urlencoded', 'X-Auth-Token' => 'TokenADNTest2018'];

    const API_EPISODE = 'http://api.tvmaze.com/episodes/';

    const HEADERS_EPISODE = ['Accept' => 'application/x-www-form-urlencoded'];

    /**
     * @return mixed
     */
    public function getAPI(){
        $response = Request::get(self::URL, self::HEADERS);
        return $response->body;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getEpisode($id){
        $url = self::API_EPISODE.$id;
        $response = Request::get($url, self::HEADERS_EPISODE);
        return $response->body;
    }

}