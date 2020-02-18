<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;

class MonitoringController extends Controller
{
    //
    public $es;
    public $site;
    public $gte = 'now-1h';   // 검색 시간  depth

    /**
     *function __construct(){
     *   $this->es = ClientBuilder::creat()->setHosts(config('database.connections.elasticsearch.hosts'))->build();   
     *} 
     */
    
    
    /**
     *      태양광 특정 단지의 정보를 반환
     *      @param string $site_code 단지ID
     * 
     */

    public function getMonitoringInformation($site_code){

    }
    
    public function index(){

        /*
        data: {
            labels: 
            datasets: [{
                label: '일 일 발전량',
                data: [12, 19, 3, 5, 2, 3, 8],
            }]
        }
        */
        $week_Name_array = array();
        $week_Power_array =array();

        $week_Name_array = array( 'Sun', 'Mon', 'Tue','Wed','Thu','Fir','Sat');
        $day_Power_array = array(12, 19, 3, 5,2,3,8);
        $weekly_power_data_array = array(
            'weeks' => $week_Name_array,
            'data'  => $day_Power_array,
        );

        $data = [
            'labels' => '일요일',
            'data' => 12,            
        ];

        //$data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        //$data = json_decode($data);
        //print_r($data);
        //return $data;
        //return view('monitoring', $data);


        return $weekly_power_data_array;
    }

}
