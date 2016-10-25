<?php
require_once '_main.php'; ?>
    	<!-- ==================alert======================= -->
	<?php echo ' <script>alert("XIMING の情報&ニュース\\n一、新版XIMING UI界面将于7月中旬开发完成。与当前XIMING UI不冲突，新旧两版并行使用。\\n二、本站备用镜像源站：http://game.ximing.cf/ 请及时收藏到收藏夹，避免无法正常访问网站！")</script> ';?>
    
	<!-- =============================================== -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
        <!-- Content Header (Page header) -->



     <section class="content-header">
        <h4>
           BGM: 青い栞.mp3
         </br>
          <small>
<audio id="bgmusic" autoplay preload loop controls></audio>
    <script>
    (function() {
        function log(info) {
            console.log(info);
            // alert(info);
        }
        function forceSafariPlayAudio() {
            audioEl.load(); // iOS 9   还需要额外的 load 一下, 否则直接 play 无效
            audioEl.play(); // iOS 7/8 仅需要 play 一下
        }

        var audioEl = document.getElementById('bgmusic');

        // 可以自动播放时正确的事件顺序是
        // loadstart
        // loadedmetadata
        // loadeddata
        // canplay
        // play
        // playing
        // 
        // 不能自动播放时触发的事件是
        // iPhone5  iOS 7.0.6 loadstart
        // iPhone6s iOS 9.1   loadstart -> loadedmetadata -> loadeddata -> canplay
        audioEl.addEventListener('loadstart', function() {
            log('loadstart');
        }, false);
        audioEl.addEventListener('loadeddata', function() {
            log('loadeddata');
        }, false);
        audioEl.addEventListener('loadedmetadata', function() {
            log('loadedmetadata');
        }, false);
        audioEl.addEventListener('canplay', function() {
            log('canplay');
        }, false);
        audioEl.addEventListener('play', function() {
            log('play');
            // 当 audio 能够播放后, 移除这个事件
            window.removeEventListener('touchstart', forceSafariPlayAudio, false);
        }, false);
        audioEl.addEventListener('playing', function() {
            log('playing');
        }, false);
        audioEl.addEventListener('pause', function() {
            log('pause');
        }, false);

        // 由于 iOS Safari 限制不允许 audio autoplay, 必须用户主动交互(例如 click)后才能播放 audio,
        // 因此我们通过一个用户交互事件来主动 play 一下 audio.
        window.addEventListener('touchstart', forceSafariPlayAudio, false);

        audioEl.src = 'https://www.ximing.cf/files/music/01.%20%E9%9D%92%E3%81%84%E6%A0%9E.mp3';
    })();
    </script>

          </small>
             </h4>
        </section>


     <section class="content-header">
        <h1>
          公告
          <small>XIMING の情報&ニュース</small>
             </h1>
        </section>



        <!-- Main content -->
        <div class="container">
    <div class="page-header">
        <h3>香港记者会场情报</h3>
    </div>

    <h3>捐赠名单</h3>
    <p>
        <ul>
            <h4> 感谢以下伙伴的大力支持，有大力出奇迹!</h4>
            <span class="img"><img style="border:0" src="./files/img/sb666.jpg" alt="太丑无法显示" width="130" height="130"></span>
            <h4> ● 还有一个伙伴是网站头像...</h4>
        </ul>
    </p>


    <h3>★ 2016/07/26 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 考虑到登入界面打开缓慢 修复了 网页加载缓慢问题</h4></br>
            <h4>  有用户反映在未挂代理的情况下网站加载速度慢</h4>
            <h4>  检测结果为部分CSS使用谷歌源的字体，再修改为360源之后还是不太理想</h4>
            <h4>  现将 前端CSS库 部分本地化，在未挂代理的情况下最低能3s加载完。</h4>
            <h4>  最大优化本是1.17s完成全部加载，由于移动端的显示可能有BUG所以未采用。</h4>
            <h4> ● 网站ICON将会在近期修改为具有能代表XIMING、张显XIMING的图标。（并不知道改成啥...）</h4></br>
        </ul>
    </p>

    <h3>★ 2016/07/20 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 新版UI已基本开发完成</h4>
            <h4> ● 后端需要考虑好在设计</h4>
        </ul>
    </p>

    <h3>★ 2016/07/12 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 由于环境恶劣，XIMING 新UI开发缓慢</h4>
            <h4>   ---------[进度：21%]----------</h4>
            <h4> ● 添加 邀请码 点击即可注册功能</h4>
            <h4> ● 修复 用户注册成功但实际并没有账号这一BUG</h4>
        </ul>
    </p>

    <h3>★ 2016/06/08 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 新版XIMING UI界面将会在7-8月开发完成。并不与现在UI相冲突。</h4>
            <h4> ● 本站备用镜像源站：http://game.ximing.cf/</h4>
        </ul>
    </p>

    <h3>★ 2016/06/07 XIMING-更新：致高考</h3>
    <p>
        <ul>
            <h4> 然而并没有什么想说的...XIMING没有高中生吧！！！哈哈哈！！！今天为了部落！！！</h4>
        </ul>
    </p>

    <h3>★ 2016/05/31 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 关于优质节点的挑选和购买需要站长不停地对全球的服务器商不断用软妹币尝试...不乏入坑...希望各位亲谅解！多多支持！</h4>
            <h4> ● 调整 新加坡服务器位置，放置在高级节点处</h4>
            <h4> ● 调整 日本-2服务器位置，放置在普通节点处</h4>
            <h4> ● 更新 新加坡服务器DNS查询，优先使用IPv6查询</h4>
            <h4> ● 更新 洛杉矶服务器DNS查询，优先使用IPv6查询</h4>
            <h4> ● 更新 日本-2服务器DNS查询，优先使用IPv6查询</h4>
            <h4> ● 关于 节点为什么这么少的解释：</h4>
            <h4> ● 站长每月需承受巨大的服务器租凭费用，由于付费用户并未达到预期（平均一个节点容纳10人，包月价格10元/月全网来说还是算便宜）。</h4>
所以...该解释强行合理...
            <h4> ● 关于 网页打不开或者SS无法使用就判断站长跑路，站长表示：渣渣！我的手机号还留给你们的呢...</h4>
            <h4> ● 题外话<br/>家里换成100M的电信宽带...速度居然爆表！！！</h4>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/滑稽.png" alt="2016-04-19" width="100" height="100"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/2016-05-31.png" alt="2016-04-19" width="562" height="291"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/2016-05-31-2.jpg" alt="2016-04-19" width="325" height="182"></span>
        </ul>
    </p>


    <h3>★ 2016/05/10 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 中毒 </h4>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/滑稽.png" alt="2016-04-19" width="100" height="100"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/哈哈哈.gif" alt="2016-04-19" width="268" height="200"></span><br/>
      </ul>
    </p>

    <h3>★ 2016/05/08 XIMING-紧急公告</h3>
    <p>
        <ul>
            <h4> ● 修复 各种问题</h4>
        </ul>
    </p>

    <h3>★ 2016/05/06 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 中毒 站长中了GIRIGIRI-LOVE毒了！需要一段时间才能解毒！</h4>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/girigiri-love.gif" alt="2016-04-19" width="150" height="127"></span>
        </ul>
    </p>

    <h3>★ 2016/05/05 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 添加 网站节点列表页面下測PING小按钮，方便用户測PING值，测试值可能大于实际值。</h4>
            <h4> ● 使用SS测试会产生巨大测试偏差，请断开SS再测试。</h4>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/測PING.png" alt="2016-04-19" width="514" height="196"></span>
            <a href="https://www.ximing.cf/files/img/測PING.png" class="btn btn-default btn-flat" target="_blank">点击放大</a><br/>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/測PING2.png" alt="2016-04-19" width="363" height="184"></span>
            <a href="https://www.ximing.cf/files/img/測PING2.png" class="btn btn-default btn-flat" target="_blank">点击放大</a>
        </ul>
    </p>

    <h3>★ 2016/05/04 XIMING-更新</h3>
    <p>
        <ul>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/滑稽.png" alt="2016-04-19" width="100" height="100"></span>
        </ul>
    </p>

    <h3>★ 2016/04/29 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 修复 日本服务器-2 | 日本服务器 -3，服务器IP已更换，需要重新添加</h4>
            <h4> ● 最近神烦，原先服务器让服务商给删除了....丢丢丢</h4>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/喵喵喵？.jpg" alt="2016-04-19" width="75" height="60"></span>
        </ul>
    </p>

    <h3>★ 2016/04/28 XIMING-紧急公告</h3>
    <p>
        <ul>
            <h4> ● 2016-04-27晚间 日本服务器供应商大规模删除服务器和帐号，导致日本-2、日本-3节点无法使用。站长将会在近期修复这一问题，造成的困扰请多多包含。</h4>
            <h4> ● 关于页游玩家，使用新加坡服务器也能登录DMM。请暂时使用 新加坡服务器代替</h4>
        </ul>
    </p>


    <h3>★ 2016/04/21 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● XIMING-免费SS由于Web服务器到期，取消掉免费站点http://msr.ximing.cf。原XIMING-免费SS香港节点托管于XIMING-付费SS</h4>
        </ul>
    </p>

    <h3>★ 2016/04/19 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 新增 香港游戏节点，玩游戏的亲请私聊站长获取试用</h4>
            <h4> ● ↓↓↓附上XIMING所有节点速度图表↓↓↓</h4>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/test-2016-04-19.png" alt="2016-04-19" width="724" height="240"></span>
            <a href="https://www.ximing.cf/files/img/test-2016-04-19.png" class="btn btn-default btn-flat" target="_blank">点击放大</a>
            <h4> ● ↓↓↓附上XIMING日本节点-2配合SockCaps64日服LOL延迟测试图↓↓↓</h4>
            <span class="img"><img style="border:0" src="https://www.ximing.cf/files/img/LOL-test.png" alt="2016-04-19" width="724" height="240"></span>
            <a href="https://www.ximing.cf/files/img/LOL-test.png" class="btn btn-default btn-flat" target="_blank">点击放大</a>
            <h4> ● 修改 密码重置邮箱为 admin@ximing.cf (请认准此邮箱！)</h4>
        </ul>
    </p>

    <h3>★ 2016/04/16 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 恰逢日本发生里氏7.2级大地震，日本线路连通性完好，但质量有所下降。速度降低，延迟小幅增加。</h4>
            <h4> ● 祝愿岛国人民一切安好</h4>
        </ul>
    </p>

    <h3>★ 2016/04/15 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 科比退役了，你们才觉得欠他一场球赛。星爷不演了，你们才觉得欠他一张电影票。快播被封了，你们才觉得欠他一份会员。现在还有机会，不要等到长者不在了，你们才觉得欠他一秒。</h4>
        </ul>
    </p>

    <h3>★ 2016/04/09 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 新增 两日本服务器，12M渣带宽，能跑满。放在PRO节点了；大家群里来个测速图啊，有奖励的啊！！</h4>
            <h4> ● 本站已转战地下党，香港记者太张扬了....</h4>
        </ul>
    </p>

    <h3>★ 2016/04/07 XIMING-更新</h3>
    <p>
        <ul>
            <span class="img"><img style="border:0" src="/files/img/ssl.png" alt="SSL" width="382" height="156"></span>
            <h4> ● 全站采用HTTPS加密技术，最大限度保证用户与网站之间的通讯安全</h4>
            <h4> ● XIMING-免费SS已有雏形，还需要大量更改；速度简直.....垃圾\("▔□▔)/</h4>
            <h4> ● 添加 新加坡节点-2</h4>
            <h4> ● 修复 邀请码逻辑错误，禁止 流量用户每日签到领取流量；感谢提出此建议的流量用户</h4>
        </ul>
    </p>

    <h3>★ 2016/04/06 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 修复 记者中心-采访用量-当前状态</h4>
            <h4> ● 修复 记者中心-我的信息-当前状态</h4>
            <h4> ● 2016/04/06/23:03 日本节点宕机，已修复</h4>
        </ul>
    </p>


    <h3>★ 2016/04/04 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 技术表示gmail是偶尔来大姨妈，可以不用管。我就姑且当真了</h4>
            <h4> ● 技术正在码 记者状态代码，近期修复</h4>
        </ul>
    </p>


    <h3>★ 2016/04/02 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 修复 签到流量彩蛋，原彩蛋原理为 剩余流量低于2G时签到可获得1G~2G;绕过先前签到机制。</h4>
            <h4> ● 修改 当剩余流量刚好为1G时，可领取2~4G，其余不变。人参就是这么充满机遇 :D</h4>
            <h4> ● BUG：今天登录本站找回密码功能邮箱 ximing_me@126.com ,发现退回来好几封gmial的邮件</h4>
            <h4> ● 测试结果为 用户若使用国内的邮箱注册的帐号是能正常收到找回密码邮件的，国外的有毒</h4>
            <h4> ● 打算部署域名邮件服务器，近日将会修复 忘记密码邮件找回功能</h4>
        </ul>
    </p>


    <h3>★ 2016/04/01 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 新添新加坡会场</h4>
            <h4> ● 网站由hk.ximing.cf搬迁至www.ximing.cf</h4>
            <h4> ● 更换加密方式，原用户需要修改密码登录即可；可使用邮件密码找回功能修改密码</h4>
            <h4> ● 明天小站成立一个月!6哭辣!</h4>
        </ul>
    </p>


    <h3>★ 2016/03/26 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 修复 邮件找回记者密码，麻麻再也不用担心我忘记密码辣</h4>
        </ul>
    </p>

    <h3>★ 2016/03/24 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 新添加日本节点-2</h4>
            <h4> ● 求使用本会场，做一名别样的香港记者</h4>
        </ul>
    </p>

    <h3>★ 2016/03/13 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 由于资金不足，日本服务器-2 与 高速服务器 将于3月15日停止</h4>
            <h4> ● 账号密码找回功能还在测试，并不能使用邮件账号密码找回功能；请联系站长</h4>
            <h4> ● 会场处于亏损...求使用本会场，做一名别样的香港记者</h4>
            <h4> ● 账号登录密码和端口密码千万不要使用与金融密码和QQ密码有任何关联的密码(再三提醒)</h4>
        </ul>
    </p>

    <h3>★ 2016/03/02 XIMING-更新</h3>
    <p>
        <ul>
            <h4> ● 本站现在为运营初期，所采用的服务器价格廉价速度并不快，几台服务器也没有配置好。</h4>
            <h4> ● 暂时只有香港这一个SS服务器可使用。</h4>
            <h4> ● 由于不稳定与不安全性，暂时没有找回密码功能。请不要将密码设置为QQ密码或重要的密码。</h4>
            <h4> ● 任何意见或建议(包括漏洞)可以邮件:ximing_me@126.com</h4>
    </ul>
    </p>


    <p>
        <ul>
            <h5>                                                                                 <a href="https://www.ximing.cf/files/Doc/ximing.txt" class="btn btn-default btn-flat"> </a></h5>
        </ul>
    </p>

</div>
    </div>
    <!-- /.content-wrapper -->

<?php
require_once '_footer.php'; ?>