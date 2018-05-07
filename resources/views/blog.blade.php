<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
    <title>个人博客</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/base.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/lrtk.css') }}">
    <script src="{{URL::asset('/js/modernizr.js')}}"></script>
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/js/jquery.imgbox.js')}}"></script>
</head>
<body>
<header>
    <div id="logo"><a href="/"></a></div>
    <nav class="topnav" id="topnav"><a href="#"><span>首页</span><span class="en">Protal</span></a><a href="#"><span>关于我</span><span class="en">About</span></a><a href="#"><span>日志</span><span class="en">Life</span></a><a href="#"><span>说说</span><span class="en">Doing</span></a><a href="#"><span>技术分享</span><span class="en">Share</span></a><a href="#"><span>学无止境</span><span class="en">Learn</span></a><a href="#"><span>留言版</span><span class="en">Gustbook</span></a></nav>
    </nav>
</header>
<div class="banner">
    <section class="box">
        <ul class="texts">
            <p>关山难越,谁悲失路之人。</p>
            <p>萍水相逢,尽是他乡之客。</p>
            <p>宇宙中心,关山大道。</p>
        </ul>
        <div class="avatar"><a href="#"><span>杨钰杰</span></a> </div>
    </section>
</div>
<div class="template">
    <div class="box">
        <h3>
            <a href="#"><p><span>个人相册</span></p></a>
        </h3>
        <ul class="photo">
            <li><a  title="宇宙中心，关山大道" href="../images/work.jpg"><img alt="" src="{{URL::asset('/images/work.jpg')}}" /></a><span>宇宙中心，关山大道</span></li>
            <li><a  title="学校后面的海滩" href="../images/college.jpg"><img alt="" src="{{URL::asset('/images/college.jpg')}}" /></a><span>学校后面的海滩</span></li>
            <li><a  title="环绕家乡的骑行" href="../images/home.jpg"><img alt="" src="{{URL::asset('/images/home.jpg')}}" /></a><span>环绕家乡的骑行</span></li>
            <li><a  title="灯光下的我们" href="../images/she.jpg"><img alt="" src="{{URL::asset('/images/she.jpg')}}" /></a><span>灯光下的我们</span></li>
            <li><a  title="不会是离别" href="../images/way.jpg"><img alt="" src="{{URL::asset('/images/way.jpg')}}" /></a><span>不会是离别</span></li>
            <li><a  title="这两只干嘛呀" href="../images/they.jpg"><img alt="" src="{{URL::asset('/images/they.jpg')}}" /></a><span>这两只干嘛呀</span></li>
        </ul>
    </div>
</div>
<article>
    <h2 class="title_tj">
        <p>文章<span>推荐</span></p>
    </h2>
    <div class="bloglist left">
        <h3>php是世界上最好的语言</h3>
        <figure><img src="{{URL::asset('/images/001.jpg')}}"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的语言是技术人员要学会的第一课的话， 那么我觉得php天下第一...</p>
            <a title="/" href="#" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2018-01-17</span><span>作者：带刀胖虎</span><span>个人博客：[<a href="#">不服就干</a>]</span></p>
        <h3>java是世界上最好的语言</h3>
        <figure><img src="{{URL::asset('/images/002.jpg')}}"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的语言是技术人员要学会的第一课的话， 那么我觉得java天下第一...</p>
            <a title="/" href="#" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2018-01-17</span><span>作者：带刀胖虎</span><span>个人博客：[<a href="#">不服就干</a>]</span></p>
        <h3>c#是世界上最好的语言</h3>
        <figure><img src="{{URL::asset('/images/003.jpg')}}"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的语言是技术人员要学会的第一课的话， 那么我觉得c#天下第一...</p>
            <a title="/" href="#" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2018-01-17</span><span>作者：带刀胖虎</span><span>个人博客：[<a href="#">不服就干</a>]</span></p>
        <h3>python是世界上最好的语言</h3>
        <figure><img src="{{URL::asset('/images/004.jpg')}}"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的语言是技术人员要学会的第一课的话， 那么我觉得python天下第一...</p>
            <a title="/" href="#" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2018-01-17</span><span>作者：带刀胖虎</span><span>个人博客：[<a href="#">不服就干</a>]</span></p>
    </div>
    <aside class="right">
        <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
        <div class="news">
            <h3>
                <p>最新<span>文章</span></p>
            </h3>
            <ul class="rank">
                <li><a href="#" title="玩个github很难么？">玩个github很难么？</a></li>
                <li><a href="#" title="看下源码很难么？">看下源码很难么？</a></li>
                <li><a href="#" title="买个云主机很难么？">买个云主机很难么？</a></li>
                <li><a href="#" title="装个Linux很难么？">装个Linux很难么？</a></li>
                <li><a href="#" title="搭建环境很难么？">搭建环境很难么？</a></li>
                <li><a href="#" title="跟上潮流很难么？">跟上潮流很难么？</a></li>
                <li><a href="/" title="保持身段很难么？">保持身段很难么？</a></li>
                <li><a href="/" title="提高身价很难么？">提高身价很难么？</a></li>
            </ul>
            <h3 class="ph">
                <p>点击<span>排行</span></p>
            </h3>
            <ul class="paih">
                <li><a href="/" title="php从入门到放弃" target="_blank">php从入门到放弃</a></li>
                <li><a href="/" title="nodejs从入门到放弃" target="_blank">nodejs从入门到放弃</a></li>
                <li><a href="/" title="python从入门到放弃" target="_blank">python从入门到放弃</a></li>
                <li><a href="/" title="java从入门到放弃" target="_blank">java从入门到放弃</a></li>
                <li><a href="/" title="c#从入门到放弃" target="_blank">c#从入门到放弃</a></li>
            </ul>
            <h3 class="links">
                <p>友情<span>链接</span></p>
            </h3>
            <ul class="website">
                <li><a href="https://github.com/Yyujie" target="_blank">Github</a></li>
                <li><a href="#">武汉楼市假天下</a></li>
                <li><a href="#">考皮技术网</a></li>
                <li><a href="#">奇米网络</a></li>
            </ul>
        </div>
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
            <a class="bds_tsina"></a>
            <a class="bds_qzone"></a>
            <a class="bds_tqq"></a>
            <a class="bds_renren"></a>
            <span class="bds_more"></span>
            <a class="shareCount"></a>
        </div>
        <!-- Baidu Button END -->
        <a href="/" class="weixin"> </a></aside>
</article>
<footer>
    <p>Design by Yujie <a href="http://www.miitbeian.gov.cn/" target="_blank">鄂B1</a> <a href="/">网站统计</a></p>
</footer>
<script src="{{URL::asset('/js/silder.js')}}"></script>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script>
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
    $(document).ready(function(){
        $(".photo").find('a').imgbox();
    });
</script>
</body>
</html>
