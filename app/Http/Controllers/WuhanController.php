<?php

namespace App\Http\Controllers;

class WuhanController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //处理news.txt数据
        $dir="/usr/local/share/applications/getUrl/news.txt";
        $content_news=$this->getData($dir);
        $title=[];
        $url=[];
        //根据基数偶数处理数组
        foreach ($content_news as $k => $v) {
            if ($k % 2 == 0 && substr($v,0,1)!='h') {
                array_push($title,$v);
            } elseif($k % 2 != 0 && substr($v,0,1)=='h') {
                array_push($url,$v);
            }
        }
        //兼容网站数据缺漏
        $new_count=count($title)+count($url);
        if(count($title)>count($url)){
            array_push($url,'http://wh.leju.com');
            foreach ($content_news as $key=>$value){
                if($key>=$new_count){
                    if($key % 2 != 0){
                        array_push($title,$value);
                    }else{
                        array_push($url,$value);
                    }
                }
            }
        }
        $articles = array_combine($title, $url);
        //处理days.txt数据
        $dir="/usr/local/share/applications/getUrl/days.txt";
        $content_wea=$this->getData($dir);
        //根据7个一组处理数组
        $days=[];
        $weathers=[];
        foreach ($content_wea as $k=>$v){
            if($k<=6){
                array_push($days,$v);
            }
            else{
                array_push($weathers,$v);
            }
        }
        $wea = array_combine($days, $weathers);
        //拼接传参数据
        $list=['articles'=>$articles,'wea'=>$wea];
        return view('Wuhan')->with('list', $list);
    }

    /**
     * 进行文件IO操作获取数据源
     * @param $dir
     * @return String
     */
    public function getData($dir){
        $file = fopen($dir, "r") or die("Unable to open file!");
        $content = fread($file, filesize($dir));
        fclose($file);
        $content = explode(',', $content);
        return $content;
    }

}
