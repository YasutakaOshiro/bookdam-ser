<?php
/*
Template Name: サービス紹介
*/
?>

<?php get_header(); ?>
<div id="contents">
    <section class="undermv">
        <h1 class="undermv__ttl anim">
            <span class="entxt enb">SERVICE</span>
            <span class="jp splittxt ttlAnim">サービス紹介</span>
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
        <h2 class="common__head--ttl">本だからこそ、<br class="sp"><span class="blue">生まれるファンがいる。</span><br>出版マーケティングだからこそ、<br
                class="sp"><span class="blue">ファンが生まれ続ける。</span></h2>
        <p class="lead">ブックダムは、出版を目的ではなくビジョン実現の手段と捉え、企画からマーケティングまで一貫したプロデュースを提供。<br
                class="pc">読者に価値を届ける本でブランド力の強化とビジネスの機会を創出します。</p>
    </section>
    <!-- <section class="service__movie" id="anchor-movie">
        <h2 class="movie__ttl common_bookttl type_center">
            <span class="enb entxt">SERVICE MOVIE</span>
            <span class="jp">1分でわかる<br class="sp">ブックダムのサービス</span>
        </h2>
        <div class="movie--content movietrigger">
            <div class="imgbox img_anim on">
                <img src="<?php echo home_url('asset/img/service/img_movie01.webp'); ?>" alt="動画サムネイル">
            </div>
            <div class="btn">
                <svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="43.5" cy="43.5" r="43.5" fill="#2871B0" />
                    <path d="M61 45L33.25 61.4545V28.5455L61 45Z" fill="white" />
                </svg>
            </div>
        </div>
    </section> -->
    <section class="service__solution" id="anchor-solution">
        <h2 class="movie__ttl common_bookttl type_center">
            <span class="enb entxt">SOLUTION</span>
            <span class="jp">ブックダムが解決できる<br class="sp">お客様のお悩み</span>
        </h2>
        <div class="solution__wrap">
            <div class="solution__box">
                <div class="solution__box--head">
                    <h3 class="solution__box--ttl">売上・集客のお悩み</h3>
                    <ul class="solution__box--list">
                        <li>新規顧客が増えない</li>
                        <li>価格競争で利益が出ない</li>
                        <li>長期ファンを作れない</li>
                    </ul>
                </div>
                <div class="solution__box--body">
                    <h4 class="solution__box--subttl">この悩みを解決できる理由</h4>
                    <p class="lead">企業の価値や魅力を体系化した書籍を活用することで、信頼を築き、新規顧客の自然な惹きつけや売上の安定的な向上を目指せます。</p>
                </div>
            </div>
            <div class="solution__box">
                <div class="solution__box--head">
                    <h3 class="solution__box--ttl">採用のお悩み</h3>
                    <ul class="solution__box--list">
                        <li>求職者の志望度が低い</li>
                        <li>応募者が少なくて困っている</li>
                        <li>応募者の定着率が低い</li>
                    </ul>
                </div>
                <div class="solution__box--body">
                    <h4 class="solution__box--subttl">この悩みを解決できる理由</h4>
                    <p class="lead">御社の採用課題を明確にし、御社の独自性とターゲット特性に合わせた効果的な採用戦略をとることで採用課題を解決します。</p>
                </div>
            </div>
            <div class="solution__box">
                <div class="solution__box--head">
                    <h3 class="solution__box--ttl">マーケティングのお悩み</h3>
                    <ul class="solution__box--list">
                        <li>自社の強みを客観視できていない</li>
                        <li>独自のコンテンツが不足している</li>
                        <li>効果が一過性で終わる</li>
                    </ul>
                </div>
                <div class="solution__box--body">
                    <h4 class="solution__box--subttl">この悩みを解決できる理由</h4>
                    <p class="lead">書籍で体系化した情報を他のマーケティングコンテンツの「原液」として活用でき、SNSやセミナーなどでも一貫性を保てます。</p>
                </div>
            </div>
            <div class="solution__box">
                <div class="solution__box--head">
                    <h3 class="solution__box--ttl">ブランディングのお悩み</h3>
                    <ul class="solution__box--list">
                        <li>権威性を高められない</li>
                        <li>市場で地位が確立できていない</li>
                        <li>会社の想いが伝わらない</li>
                    </ul>
                </div>
                <div class="solution__box--body">
                    <h4 class="solution__box--subttl">この悩みを解決できる理由</h4>
                    <p class="lead">出版を通じて、企業の権威性や信頼性を高め、競合との差別化を図ると同時に、長期的なブランド価値の構築が可能です。</p>
                </div>
            </div>
            <div class="solution__box">
                <div class="solution__box--head">
                    <h3 class="solution__box--ttl">広報・PRのお悩み</h3>
                    <ul class="solution__box--list">
                        <li>商品やサービスの認知が不足している</li>
                        <li>効果が一過性で終わる</li>
                        <li>伝えたい情報がターゲットに響かない</li>
                    </ul>
                </div>
                <div class="solution__box--body">
                    <h4 class="solution__box--subttl">この悩みを解決できる理由</h4>
                    <p class="lead">出版を通じて社会的信頼性を強化し、メディア露出をはじめ、あらゆるステークホルダーとのコミュニケーションを促進できます。</p>
                </div>
            </div>
            <div class="solution__box">
                <div class="solution__box--head">
                    <h3 class="solution__box--ttl">人材育成のお悩み</h3>
                    <ul class="solution__box--list">
                        <li>体系的なコンテンツがなく育成が難しい</li>
                        <li>理念や価値観が社員に浸透しない</li>
                        <li>社員の定着率が低い</li>
                    </ul>
                </div>
                <div class="solution__box--body">
                    <h4 class="solution__box--subttl">この悩みを解決できる理由</h4>
                    <p class="lead">書籍を教育ツールとして活用することで、社員のスキルアップや理念浸透を促し、組織の成長や一体感の強化を図ることができます。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="common__features" id="anchor-reason">
        <h2 class="common_bookttl type_white">
            <span class="enb entxt">REASON</span>
            <span class="jp">ブックダムが<br class="sp">選ばれる3つの<span class="yellow">理由</span>
        </h2>
        <div class="common__features--wrap">
            <div class="common__features--box">
                <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/features/img_feature01.webp'); ?>"
                        alt=""></div>
                <div class="txtbox">
                    <div class="subttl">中長期的な伴走支援</div>
                    <h3 class="ttl">御社の出版を支える<br><span class="yellow">中長期的パートナーシップ</span></h3>
                    <p class="lead">
                        企画立案から出版後のマーケティング支援まで、包括的に全体のプロジェクトマネジメントを行います。御社のビジョン実現を後押しするために、出版をゴールとせず、中長期的に伴走支援いたします。</p>
                </div>
            </div>
            <div class="common__features--box">
                <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/features/img_feature02.webp'); ?>"
                        alt=""></div>
                <div class="txtbox">
                    <div class="subttl">豊富なノウハウや知見</div>
                    <h3 class="ttl">出版マーケティングに関する<br><span class="yellow">豊富な知見とノウハウ</span></h3>
                    <p class="lead">
                        ブックダムは過去に書籍のPR・プロモーションに特化した事業からスタートしました（重版率は約60%）。その経験を活かした、企業の出版マーケティング支援が特長のベースになっています。</p>
                </div>
            </div>
            <div class="common__features--box">
                <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/features/img_feature03.webp'); ?>"
                        alt=""></div>
                <div class="txtbox">
                    <div class="subttl">優れた投資対効果</div>
                    <h3 class="ttl"><span class="yellow">費用対効果</span>の高さを追求した<br>出版支援（出版マーケティング）</h3>
                    <p class="lead">
                        企業にとって決して安くない投資になりますが、出版はあらゆる経営領域に対して、一過性でない持続的な効果を発揮します。他社の企業出版と比較しても、ブックダムだからこそ、その効果を最大化できる自信があります。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="service__flow" id="anchor-flow">
        <h2 class="flow__ttl common_bookttl">
            <span class="enb entxt">ORIGINAL FLOW</span>
            <span class="jp">ブックダム独自の<br class="sp">プロジェクトフローと業務範囲</span>
        </h2>
        <div class="flow__box">
            <div class="flow__box--imgbox">
                <div class="guide sp">※横スクロールでご覧いただけます。</div>
                <div class="imgwrap"><img src="<?php echo home_url('asset/img/features/img_flow01.webp'); ?>"
                        alt="ブックダム独自のオリジナルフロー"></div>
            </div>
            <div class="flow__box--wrap">
                <div class="txtbox">
                    <div class="txtbox__ttlwrap">
                        <div class="icon">
                            <picture>
                                <source srcset="<?php echo home_url('asset/img/features/ico_point01_sp.svg'); ?>"
                                    media="(max-width: 896px)" type="image/webp">
                                <img src="<?php echo home_url('asset/img/features/ico_point01.svg'); ?>" alt="POINT 01">
                            </picture>
                        </div>
                        <h3 class="ttl">
                            <span class="subtxt">マーケティング会議</span>
                            <span class="maintxt"><span class="blue">出版の目的</span>を共有し、成果を最大化する戦略的マーケティング会議</span>
                        </h3>
                    </div>
                    <p class="lead">単に出版するだけでなく、「なぜ出版するのか」「自社としてどのような成果を得たいのか」といった、<br
                            class="pc">目的やゴールを丁寧にヒアリングし、書籍を活用して、どのようにSNSや広告、PR活動との連携を図れるか、<br class="pc">御社と戦略を設計します。
                    </p>
                </div>
                <div class="txtbox">
                    <div class="txtbox__ttlwrap">
                        <div class="icon">
                            <picture>
                                <source srcset="<?php echo home_url('asset/img/features/ico_point02_sp.svg'); ?>"
                                    media="(max-width: 896px)" type="image/webp">
                                <img src="<?php echo home_url('asset/img/features/ico_point02.svg'); ?>" alt="POINT 02">
                            </picture>
                        </div>
                        <h3 class="ttl">
                            <span class="subtxt">プロジェクトマネジメント</span>
                            <span class="maintxt">出版プロジェクトの<span class="blue">進行を総合管理</span>し、スムーズな進行を実現</span>
                        </h3>
                    </div>
                    <p class="lead">
                        ブックダムでは出版をひとつのプロジェクトと捉えて、全体をディレクションする体制を整えています。初期の企画立案から、製作、流通、さらには出版後のプロモーションに至るまで徹底的にサポート。プロジェクト進行の煩雑さを解消し、安心して取り組んでいただける環境を提供します。
                    </p>
                </div>
                <div class="txtbox">
                    <div class="txtbox__ttlwrap">
                        <div class="icon">
                            <picture>
                                <source srcset="<?php echo home_url('asset/img/features/ico_point03_sp.svg'); ?>"
                                    media="(max-width: 896px)" type="image/webp">
                                <img src="<?php echo home_url('asset/img/features/ico_point03.svg'); ?>" alt="POINT 03">
                            </picture>
                        </div>
                        <h3 class="ttl">
                            <span class="subtxt">書籍発売～流通・販売促進</span>
                            <span class="maintxt"><span class="blue">出版を手段</span>とし、その先の<br
                                    class="sp">成長戦略を共に描く販売促進支援</span>
                        </h3>
                    </div>
                    <p class="lead">出版自体をゴールとせず、その先に続くプロモーションやマーケティング活動にも継続的に伴走します。<br
                            class="pc">書籍を活用したブランディングや顧客獲得のための施策を提案し、中長期的な事業成長を支援します。</p>
                </div>
            </div>
        </div>
    </section>
    <div class="commoncv_short">
        <div class="commoncv_short__txtbox">
            <h2 class="commoncv_short__txtbox--ttl ttlAnim splittxt">読者は御社のファンになる</h2>
            <p class="lead">ブックダムは御社の<br class="sp">ビジョン実現のために<br class="pc">伴走いたします。</p>
        </div>
        <ul class="commoncv_short__cvs">
            <li>
                <a href="<?php echo home_url('document/'); ?>" class="commoncv_short_dlbtn">
                    <div class="commoncv_short_dlbtn__wrap">
                        <div class="commoncv_short_dlbtn__wrap--txt">資料DL</div>
                        <div class="commoncv_short_dlbtn__wrap--icon"><img
                                src="<?php echo home_url('asset/img/common/svg_dl01.svg'); ?>" alt=""></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo home_url('contact/'); ?>" class="commoncv_short_ctbtn">
                    <div class="commoncv_short_ctbtn__wrap">
                        <div class="commoncv_short_ctbtn__wrap--txt">まずは相談してみる</div>
                        <div class="commoncv_short_ctbtn__wrap--icon"><img
                                src="<?php echo home_url('asset/img/common/svg_contact01.svg'); ?>" alt="">
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <section class="service__line" id="anchor-faq">
        <h2 class="line__ttl common_bookttl type_center">
            <span class="enb entxt">SERVICE FLOW</span>
            <span class="jp">出版の流れ</span>
        </h2>
        <div class="commonfaq__wrap">
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 01</div>
                    <div class="txt">お問い合わせ</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">企業出版を検討される企業様からお問い合わせをいただくフェーズです。<br class="pc"><a
                                href="<?php echo home_url('contact/'); ?>" class="txtlink">当サービスサイト</a>または、<a
                                href="https://bookdam.co.jp/contact/" target="_blank"
                                class="txtlink">ブックダムのHP</a>からご連絡をいただきます。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 02</div>
                    <div class="txt">面談</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">オフラインないしオンラインで面談を行い、具体的な出版の目的や求める成果について深掘りするフェーズです。<br
                                class="pc">併せて、ブックダムのサービス概要や伴走支援事例を紹介いたします。このフェーズでは、お互いの認識をすり合わせ、<br
                                class="pc">出版プロジェクトの方向性を確認いたします。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 03</div>
                    <div class="txt">お見積もり</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">ご面談内容をベースに、個別の出版プロジェクトの全体像および費用のお見積もりを提案をいたします。<br
                                class="pc">必要に応じて条件やプランの調整を行います。透明性を重視し、お互いの信頼関係を構築する重要なフェーズです。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 04</div>
                    <div class="txt">ご契約</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">支援業務内容・お見積もりを含めた条件にご承諾いただいた後、正式な契約を締結します。<br class="pc">ご契約書は電子締結を予定しています。<br
                                class="pc">このフェーズを経まして、プロジェクトが正式にスタートし、具体的なタイムラインが設定されます。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 05</div>
                    <div class="txt">企画・戦略会議</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">出版企画のコンセプトや内容の方向性、構成案の立案、ターゲット読者の設定などを行うフェーズです。<br
                                class="pc">同時並行で、出版マーケティングの概略を策定いたします。<br class="pc">実施回数はおおよそ2～3回を想定しています。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 06</div>
                    <div class="txt">取材・原稿執筆</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">決定した出版企画書に沿って、ブックライター同席のもと取材を開始します。<br class="pc">その取材内容を基に原稿を執筆するフェーズです。<br
                                class="pc">取材回数は1回あたりおおよそ2時間×5回を想定しています。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 07</div>
                    <div class="txt">編集・デザイン・校正・DTP</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">執筆した原稿を整理し、本格的な書籍の製作作業に進行するフェーズです。<br
                                class="pc">担当編集者が内容のクオリティチェックや製作上のディレクションを行いながら、<br class="pc">御社と二人三脚で書籍を完成まで仕上げてまいります。
                        </div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 08</div>
                    <div class="txt">製本・印刷・発売</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">最終的なデータを基に製本と印刷を行い、書籍を完成させるフェーズです。<br
                                class="pc">Amazonをはじめとしたオンラインストアでは、発売前に事前予約が可能な状態になります。<br
                                class="pc">その後、リアル書店やオンラインストアに流通・配本し、正式に発売に至ります。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="linewrap enb">FLOW 09</div>
                    <div class="txt">販売促進・マーケティング<br class="sp">ツールとしての書籍活用</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="txt">御社×ブックダムで策定したマーケティング戦略・戦術のPDCAを推進するフェーズです。<br
                                class="pc">出版1年後まで、書籍の販促活動や自社マーケティングツールとしての活用を支援します。<br
                                class="pc">出版の効果を最大化させるため、長期的な成果創出を目指したフォローアップも行います。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="service__case">
        <h2 class="case__ttl common_bookttl">
            <span class="entxt">事例紹介</span>
            <span class="jp">本を通して、ファンが生まれる。<br>ブックダムの伴走支援事例をご紹介</span>
        </h2>
        <ul class="archive__list">
            <?php
                $args = array(
                    'post_type' => 'case',
                    'posts_per_page' => 3,
                );
                $case_query = new WP_Query($args);
                if ($case_query->have_posts()) :
                    while ($case_query->have_posts()) : $case_query->the_post();
            ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="archive__list--link">
                    <div class="imgbox">
                        <?php
                            $img_main = get_field('img_main');
                            if ($img_main) {
                                echo '<img src="' . esc_url($img_main) . '" alt="">';
                            }else{
                                echo '<img src="' . esc_url(home_url('asset/img/case/default_case.jpg')) . '" alt="デフォルト画像">';
                            }
                        ?>
                    </div>
                    <div class="txtbox">
                        <div class="txtbox__name"><?php the_field('chosha'); ?></div>
                        <h2 class="txtbox__ttl">
                            <?php
                                $title = get_the_title();
                                echo mb_strlen($title) > 32
                                    ? mb_substr($title, 0, 32) . '...'
                                    : $title;
                            ?>
                        </h2>
                        <ul class="txtbox__categorylist">
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'result_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<li>' . esc_html($term->name) . '</li>';
                                    }
                                }
                            ?>
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'target_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<li>' . esc_html($term->name) . '</li>';
                                    }
                                }
                            ?>
                            <?php
                                $terms = get_the_terms(get_the_ID(), 'employees_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<li>' . esc_html($term->name) . '</li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </a>
            </li>
            <?php
                    endwhile;
                    wp_reset_postdata();
                    endif;
            ?>
        </ul>
        <a href="<?php echo home_url('case/'); ?>" class="basebtn">
            <span class="txt">ブックダムの出版事例を見る</span>
            <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_arrow01.svg'); ?>" alt=""></span>
        </a>
    </section> -->
    <section class="commonfaq service__faq">
        <h2 class="commonfaq__ttl common_bookttl type_center">
            <span class="enb entxt">FAQ</span>
            <span class="jp">よくある質問</span>
        </h2>
        <div class="commonfaq__wrap">
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">原稿は自社(著者自身)で執筆しなければなりませんか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">基本的にはブックライターの方に執筆を担当いただくのでご安心ください。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">どのようなジャンルの書籍が対応可能ですか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">基本的にどのジャンルでも対応可能です。<br class="pc">御社の有するコンテンツに応じたジャンルを提案いたします。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">出版後のマーケティング支援はどのように行われますか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">書籍の販売促進を軸として、御社のマーケティングツールとしての活用をアドバイスさせていただきながら、<br
                                class="pc">PDCAを推進し、求める成果を生み出していきます。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">書籍のペルソナ読者はどのように設定しますか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">出版の目的や求める成果に応じて設定いたします。<br class="pc">基本的な考え方としては、書籍を通じて「まずはこんな人の人生をより良くしたい」<br
                                class="pc">「こんな方に自社のファンになってほしい」と思える読者がペルソナになります。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">紙の書籍と電子書籍の両方に対応していますか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">はい、対応しています。<br class="pc">紙・電子書籍ともに製作いたします。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">どのような販路が用意されていますか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">リアル書店とAmazonをはじめとしたオンライン書店が主となります。<br
                                class="pc">ただし、書籍の特性に応じた販路も考えられますので、マーケティングに関する会議であらゆる販路を抽出いたします。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">出版するまでの期間はどれくらいかかりますか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">基本的にはおよそ10カ月前後を想定しています。<br
                                class="pc">ただし、書籍のスペックや構成、ボリュームに応じて期間は変動いたしますので、その場合は都度相談となります。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">原稿がなくても出版の相談ができますか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">はい。<br class="pc">原稿執筆はブックダム側で対応することが可能ですので、問題ございません。</div>
                    </div>
                </div>
            </div>
            <div class="commonfaq__box">
                <div class="commonfaq__box--content type_q">
                    <div class="icon">Q</div>
                    <div class="txt">企業出版以外の出版も対応できますか？</div>
                    <div class="toggle">
                        <div class="line"></div>
                        <div class="line line02"></div>
                    </div>
                </div>
                <div class="typea_wrap">
                    <div class="commonfaq__box--content type_a">
                        <div class="icon">A</div>
                        <div class="txt">商業出版については刊行計画が決定しているため対応致しかねます。<br
                                class="pc">インナーブランディングを目的とした社内向けの刊行物など、ご対応可能なケースもあります。<br class="pc">お気軽にご相談いただけますと幸いです。
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo home_url('faq/'); ?>" class="basebtn">
            <span class="txt">その他の質問をみる</span>
            <span class="icon"><img src="<?php echo home_url('asset/img/common/ico_arrow01.svg'); ?>" alt=""></span>
        </a>
    </section>
</div>
<div class="movie_modal">
    <div class="js-movie-close modal_bg"></div>
    <div class="modal_content">
        <div class="iframewrap">
            <iframe width="560" height="315" src="" id="iframeMovieTarget" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
    <button class="js-movie-close close_btn">×</button>
</div>
<?php get_footer(); ?>