<?php
/*
Template Name: 特長
*/
?>

<?php get_header(); ?>
<div id="contents">
    <section class="undermv">
        <h1 class="undermv__ttl anim">
            <span class="entxt enb">FEATURES</span>
            <span class="jp splittxt ttlAnim">特長</span>
        </h1>
        <ul class="undermv__cvs">
            <li>
                <a href="<?php echo home_url('document/'); ?>" class="undermv_dlbtn">
                    <div class="undermv_dlbtn__wrap">
                        <div class="undermv_dlbtn__wrap--txt">資料ダウンロード</div>
                        <div class="undermv_dlbtn__wrap--icon"><img
                                src="<?php echo home_url('asset/img/common/svg_dl01.svg'); ?>" alt=""></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo home_url('contact/'); ?>" class="undermv_ctbtn">
                    <div class="undermv_ctbtn__wrap">
                        <div class="undermv_ctbtn__wrap--txt">まずは相談してみる</div>
                        <div class="undermv_ctbtn__wrap--icon"><img
                                src="<?php echo home_url('asset/img/common/svg_contact01.svg'); ?>" alt=""></div>
                    </div>
                </a>
            </li>
        </ul>
    </section>
    <div class="bread">
        <?php breadcrumb(); ?>
    </div>
    <section class="common__head">
        <h2 class="common__head--ttl"><span class="blue">伴走支援と経験に基づく<br class="sp">確かな再現性</span></h2>
        <p class="lead">中長期にわたる伴走支援で、御社の出版プロジェクトを全面サポート。<br class="pc">出版マーケティングの豊富な知識と経験に裏打ちされた戦略で、確実な成果を再現します。<br class="pc">高い投資対効果を実現し、ビジネスの成長を支援します。</p>
    </section>
    <section class="common__features" id="anchor-features">
        <h2 class="common_bookttl type_white">
            <span class="enb entxt">FEATURES</span>
            <span class="jp">ブックダムの３つの<span class="yellow">特長</span></span>
        </h2>
        <div class="common__features--wrap">
            <div class="common__features--box">
                <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/features/img_feature01.webp'); ?>" alt=""></div>
                <div class="txtbox">
                    <div class="subttl">中長期的な伴走支援</div>
                    <h3 class="ttl">御社の出版を支える<br><span class="yellow">中長期的パートナーシップ</span></h3>
                    <p class="lead">企画立案から出版後のマーケティング支援まで、包括的に全体のプロジェクトマネジメントを行います。御社のビジョン実現を後押しするために、出版をゴールとせず、中長期的に伴走支援いたします。</p>
                </div>
            </div>
            <div class="common__features--box">
                <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/features/img_feature02.webp'); ?>" alt=""></div>
                <div class="txtbox">
                    <div class="subttl">豊富なノウハウや知見</div>
                    <h3 class="ttl">出版マーケティングに関する<br><span class="yellow">豊富な知見とノウハウ</span></h3>
                    <p class="lead">ブックダムは過去に書籍のPR・プロモーションに特化した事業からスタートしました（重版率は約60%）。その経験を活かした、企業の出版マーケティング支援が特長のベースになっています。</p>
                </div>
            </div>
            <div class="common__features--box">
                <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/features/img_feature03.webp'); ?>" alt=""></div>
                <div class="txtbox">
                    <div class="subttl">優れた投資対効果</div>
                    <h3 class="ttl"><span class="yellow">費用対効果</span>の高さを追求した<br>出版支援（出版マーケティング）</h3>
                    <p class="lead">企業にとって決して安くない投資になりますが、出版はあらゆる経営領域に対して、一過性でない持続的な効果を発揮します。他社の企業出版と比較しても、ブックダムだからこそ、その効果を最大化できる自信があります。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="features__number" id="anchor-number">
        <h2 class="number__ttl common_bookttl">
            <span class="enb entxt">NUMBER</span>
            <span class="jp"><span class="blue">数字</span>で見るブックダム</span>
        </h2>
        <div class="number__wrap">
            <div class="number__box">
                <h3 class="number__box--ttl">重版実績</h3>
                <div class="number__box--numwrap">
                    <div class="init beforeinit">約</div>
                    <div class="num counter enb">60</div>
                    <div class="init afterinit">%</div>
                </div>
                <p class="lead">創業以来、プロモーションやプロデュースに携わった書籍の重版実績は、業界平均を大きく上回る数字を維持し続けています。</p>
            </div>
            <div class="number__box">
                <h3 class="number__box--ttl">CVR</h3>
                <div class="number__box--numwrap">
                    <div class="init beforeinit">約</div>
                    <div class="num counter enb">5~8</div>
                    <div class="init afterinit">%</div>
                </div>
                <p class="lead">創業以来、ブックダムがマーケティングに携わりCVR*を
                測定している書籍の平均実績です。(*書籍からのリスト獲得率)</p>
            </div>
            <div class="number__box">
                <h3 class="number__box--ttl">設立</h3>
                <div class="number__box--numwrap">
                    <div class="num counter enb">2019</div>
                    <div class="init afterinit">年</div>
                </div>
                <p class="lead">企業様向けの出版支援を開始したのは2022年と、<br class="pc">歴史は浅いながらも将来性と可能性に溢れた出版社です。</p>
            </div>
            <div class="number__box">
                <h3 class="number__box--ttl">SNSの全スタッフフォロワー数</h3>
                <div class="number__box--numwrap">
                    <div class="num counter enb">17,358</div>
                    <div class="init afterinit">人</div>
                </div>
                <p class="lead">全員広報を合言葉に、XやInstagram、noteなど<br class="pc">さまざまなメディアで発信を続けています。<br class="pc">※2025年6月時点</p>
            </div>
            <div class="number__box">
                <h3 class="number__box--ttl">平均発行部数</h3>
                <div class="number__box--numwrap">
                    <div class="init beforeinit">約</div>
                    <div class="num counter enb">2</div>
                    <div class="init afterinit">万部</div>
                </div>
                <p class="lead">ブックダムがプロデュースを手がけた書籍の平均重版回数です。</p>
            </div>
            <div class="number__box">
                <h3 class="number__box--ttl">平均重版回数</h3>
                <div class="number__box--numwrap">
                    <div class="init beforeinit">約</div>
                    <div class="num counter enb">3</div>
                    <div class="init afterinit">回</div>
                </div>
                <p class="lead">ブックダムがプロデュースを手がけた書籍の平均重版回数です。</p>
            </div>
        </div>
    </section>
    <section class="features__flow" id="anchor-flow">
        <h2 class="flow__ttl common_bookttl">
            <span class="enb entxt">ORIGINAL FLOW</span>
            <span class="jp">ブックダム独自の<br class="sp">プロジェクトフロー</span>
        </h2>
        <div class="flow__box">
            <div class="flow__box--imgbox">
                <div class="guide sp">※横スクロールでご覧いただけます。</div>
                <div class="imgwrap"><img src="<?php echo home_url('asset/img/features/img_flow01.webp'); ?>" alt="ブックダム独自のオリジナルフロー"></div>
            </div>
            <div class="flow__box--wrap">
                <div class="txtbox">
                    <div class="txtbox__ttlwrap">
                        <div class="icon">
                            <picture>
                                <source srcset="<?php echo home_url('asset/img/features/ico_point01_sp.svg'); ?>" media="(max-width: 896px)" type="image/webp">
                                <img src="<?php echo home_url('asset/img/features/ico_point01.svg'); ?>" alt="POINT 01">
                            </picture>
                        </div>
                        <h3 class="ttl">
                            <span class="subtxt">マーケティング会議</span>
                            <span class="maintxt"><span class="blue">出版の目的</span>を共有し、成果を最大化する戦略的マーケティング会議</span>
                        </h3>
                    </div>
                    <p class="lead">単に出版するだけでなく、「なぜ出版するのか」「自社としてどのような成果を得たいのか」といった、<br class="pc">目的やゴールを丁寧にヒアリングし、書籍を活用して、どのようにSNSや広告、PR活動との連携を図れるか、<br class="pc">御社と戦略を設計します。</p>
                </div>
                <div class="txtbox">
                    <div class="txtbox__ttlwrap">
                        <div class="icon">
                            <picture>
                                <source srcset="<?php echo home_url('asset/img/features/ico_point02_sp.svg'); ?>" media="(max-width: 896px)" type="image/webp">
                                <img src="<?php echo home_url('asset/img/features/ico_point02.svg'); ?>" alt="POINT 02">
                            </picture>
                        </div>
                        <h3 class="ttl">
                            <span class="subtxt">プロジェクトマネジメント</span>
                            <span class="maintxt">出版プロジェクトの<span class="blue">進行を総合管理</span>し、スムーズな進行を実現</span>
                        </h3>
                    </div>
                    <p class="lead">ブックダムでは出版をひとつのプロジェクトと捉えて、全体をディレクションする体制を整えています。初期の企画立案から、製作、流通、さらには出版後のプロモーションに至るまで徹底的にサポート。プロジェクト進行の煩雑さを解消し、安心して取り組んでいただける環境を提供します。</p>
                </div>
                <div class="txtbox">
                    <div class="txtbox__ttlwrap">
                        <div class="icon">
                            <picture>
                                <source srcset="<?php echo home_url('asset/img/features/ico_point03_sp.svg'); ?>" media="(max-width: 896px)" type="image/webp">
                                <img src="<?php echo home_url('asset/img/features/ico_point03.svg'); ?>" alt="POINT 03">
                            </picture>
                        </div>
                        <h3 class="ttl">
                            <span class="subtxt">書籍発売～流通・販売促進</span>
                            <span class="maintxt"><span class="blue">出版を手段</span>とし、その先の<br class="sp">成長戦略を共に描く販売促進支援</span>
                        </h3>
                    </div>
                    <p class="lead">出版自体をゴールとせず、その先に続くプロモーションやマーケティング活動にも継続的に伴走します。<br class="pc">書籍を活用したブランディングや顧客獲得のための施策を提案し、中長期的な事業成長を支援します。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="features__message" id="anchor-message">
        <div class="message__head img_anim"><img src="<?php echo home_url('asset/img/features/img_message01.webp'); ?>" alt=""></div>
        <div class="message__body">
            <h2 class="common_bookttl">
                <span class="entxt">ブックダムからの約束</span>
            </h2>
            <p class="message__body--txt">
            <span class="rich_fade">価値あるものを、必要としている人たちに届ける。<br>そのマーケティングの本質は、<br class="sp">企業の事業活動においてはもちろん、<br class="sp">出版にも通じて言えます。</span><span class="rich_fade">わたしたちは、出版という手段と、<br class="sp">書籍というコンテンツの強みを存分に活かし、<br>御社のファンづくりを実現する、<br class="sp">唯一無二の出版プロデュースを提供しております。</span><span class="rich_fade">その根底には、御社のビジョン実現、<br class="sp">そして持続的な成長に中長期的に寄与することで、<br>より良い社会を創り、<br class="sp">未来に繋いでいきたいという想いがあります。</span><span class="rich_fade">わたしたちを選んでいただいたお客様に、<br class="sp">必ずお伝えしていること。</span><span class="rich_fade blue"><span class="pc">「</span>わたしたちは<br class="sp">御社の一生涯のパートナーです<span class="pc">」</span></span><span class="rich_fade">心からそう伝えられるのは、<br class="sp">一貫した企業姿勢の表明であり、<br>本と出版がもたらす価値と<br class="sp">可能性を信じているからに他なりません。</span><span class="rich_fade">本と出版を通じたより良い未来の共創。<br>ぜひ御社とご一緒させていただけることを<br class="sp">楽しみにしております。</span>
            </p>
            <div class="namewrap">
                <div class="position">代表取締役</div>
                <div class="name"><img src="<?php echo home_url('asset/img/features/img_name01.webp'); ?>" alt="菊池奈起"></div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>