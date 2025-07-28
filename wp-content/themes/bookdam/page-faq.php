<?php
/*
Template Name: よくある質問
*/
?>

<?php get_header(); ?>
<div id="contents">
    <section class="undermv">
        <h1 class="undermv__ttl anim">
            <span class="entxt enb">FAQ</span>
            <span class="jp splittxt ttlAnim">よくある質問</span>
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
    <section class="faq__category">
        <h2 class="category__ttl common_bookttl">
            <span class="enb entxt">CATEGORY</span>
            <span class="jp">カテゴリーからさがす</span>
        </h2>
        <ul class="category__anchors">
            <li>
                <a href="#anchor-service">
                    <span class="txt">サービスについて</span>
                    <span class="icon"><img src="<?php echo home_url('asset/img/faq/ico_arrow01.svg'); ?>"
                            alt=""></span>
                </a>
            </li>
            <li>
                <a href="#anchor-bookdam">
                    <span class="txt">ブックダムについて</span>
                    <span class="icon"><img src="<?php echo home_url('asset/img/faq/ico_arrow01.svg'); ?>"
                            alt=""></span>
                </a>
            </li>
            <li>
                <a href="#anchor-payment">
                    <span class="txt">支払いについて</span>
                    <span class="icon"><img src="<?php echo home_url('asset/img/faq/ico_arrow01.svg'); ?>"
                            alt=""></span>
                </a>
            </li>
            <li>
                <a href="#anchor-other">
                    <span class="txt">その他のご質問</span>
                    <span class="icon"><img src="<?php echo home_url('asset/img/faq/ico_arrow01.svg'); ?>"
                            alt=""></span>
                </a>
            </li>
        </ul>
    </section>
    <div class="faq__main">
        <section class="commonfaq" id="anchor-service">
            <h2 class="commonfaq__ttl common_bookttl type_center">
                <span class="enb entxt">SERVICE</span>
                <span class="jp">サービスについて</span>
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
                            <div class="txt">出版の目的や求める成果に応じて設定いたします。<br
                                    class="pc">基本的な考え方としては、書籍を通じて「まずはこんな人の人生をより良くしたい」<br
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
                                    class="pc">インナーブランディングを目的とした社内向けの刊行物など、ご対応可能なケースもあります。<br
                                    class="pc">お気軽にご相談いただけますと幸いです。</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="commonfaq" id="anchor-payment">
            <h2 class="commonfaq__ttl common_bookttl type_center">
                <span class="enb entxt">PAYMENT</span>
                <span class="jp">支払いについて</span>
            </h2>
            <div class="commonfaq__wrap">
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">支払い方法やスケジュールについて教えてください。</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">支払い方法は一括、分割を含めて複数のパターンを設けております。<br
                                    class="pc">できる限り御社の予算計画に合わせたスケジュールで対応いたします。個別でご相談ください。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">料金の分割払いは可能ですか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">可能です。<br class="pc">お気軽にご相談ください。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">費用にはどのようなサービスが含まれていますか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">
                                大別すると以下の3つが含まれています。詳細は面談でご説明させていただきます。<br>　①書籍制作、流通、販売促進業務<br>　②プロジェクトマネジメント業務<br>　③マーケティング支援業務<br><br><a
                                    href=" <?php echo home_url('contact/'); ?>" class="txtlink">お問い合わせ・ご相談はこちら→</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">追加費用が発生するケースはどのような場合ですか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">成果保証型の販売促進施策や広告施策、書籍以外のコンテンツ制作などはオプションとなっております。<br
                                    class="pc">詳細は面談でご説明させていただきます。<br><br><a href="<?php echo home_url('contact/'); ?>"
                                    class="txtlink">お問い合わせ・ご相談はこちら→</a></div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">契約のキャンセルや変更は可能ですか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">可能ですが、作業の進捗状況に応じてご返金金額は変動いたします。<br class="pc">
                                ご返金条項については契約書に明記しております。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">印税はどのような条件になりますか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">実売印税として本体定価の5%を基本条件としております。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">予算に合わせた提案をしてもらえますか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">可能です。<br>弊社は製作原価を開示しておりますので、ご予算に合わせて書籍のスペックや部数の調整を行いやすいのも特長です。</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="commonfaq" id="anchor-bookdam">
            <h2 class="commonfaq__ttl common_bookttl type_center">
                <span class="enb entxt">ABOUT US</span>
                <span class="jp">ブックダムについて</span>
            </h2>
            <div class="commonfaq__wrap">
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">ブックダムの特長や他社との違いは何ですか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">出版マーケティングの豊富な知見に基づいた、中長期的伴走型のサービスが特長です。<br class="pc">詳しくは、ぜひブックダムの<a
                                    href="<?php echo home_url('features/'); ?>" class="txtlink">特長ページ</a>をご覧ください。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">確実にベストセラーを狙えますか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">ベストセラーは確約できませんが、<br class="pc">該当ジャンルにおけるロングセラーに育てられるようなコンテンツづくりを大切にしています。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">地方の中小企業でも対応可能ですか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">可能です。<br class="pc">地域性は問いません。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">どのような企業が出版で成果を出していますか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">業界や業種を問わないのが特長です。<br
                                    class="pc">目的とゴールを明確にして、妥協のないコンテンツ製作とマーケティングを行うことで成果を出されています。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">ブックダムのミッションやビジョンについて教えてください。</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">ミッション「 本と出版の価値を高め、社会により良い影響を与える」<br
                            class="pc">ビジョン「読者の未来をめくる」<br                                    class="pc">企業出版を通して提供価値を高め続けることで、ミッションとビジョンの実現に繋げます。<br><br><a
                                    href="<?php echo home_url('about-us/#anchor-philosophy'); ?>"
                                    class="txtlink">経営理念を詳しくみる→</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="commonfaq" id="anchor-other">
            <h2 class="commonfaq__ttl common_bookttl type_center">
                <span class="enb entxt">OTHERS</span>
                <span class="jp">その他のご質問</span>
            </h2>
            <div class="commonfaq__wrap">
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">相談に費用はかかりますか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">「 選択肢として興味や関心がある 」という段階で、ご相談いただき問題ありません。<br class="pc">一度お話させていただくことで、「出版について具体的にイメージができた」という声をよくいただきます。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">出版をする際に、どのような目標設定が必要ですか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">出版の目的に基づき、定性目標と定量目標を共に設定いたします。
                                <ul class="innerul">
                                    <li>定性目標：出版後に実現していたい自社や社会の状態</li>
                                    <li>定量目標：出版後に得ていたい事業における成果</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">出版を検討しているが、どの段階で相談すればいいですか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">「 選択肢として興味や関心がある 」という段階で、ご相談いただき問題ありません。<br class="pc">一度お話させていただくことで、「出版について具体的にイメージができた」という声をよくいただきます。</div>
                        </div>
                    </div>
                </div>
                <div class="commonfaq__box">
                    <div class="commonfaq__box--content type_q">
                        <div class="icon">Q</div>
                        <div class="txt">出版後の反響をどのように測定しますか？</div>
                        <div class="toggle">
                            <div class="line"></div>
                            <div class="line line02"></div>
                        </div>
                    </div>
                    <div class="typea_wrap">
                        <div class="commonfaq__box--content type_a">
                            <div class="icon">A</div>
                            <div class="txt">書籍の販売部数をはじめ、御社事業のさまざまな領域(集客、売上、採用、広報、新規事業など)において、<br class="pc">可視化できる反響を測定していきます。</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div class="faq__links commonlinkarea">
        <a href="<?php echo home_url('features/'); ?>" class="commonlinkarea__link">
            <div class="commonlinkarea__link--txtbox">
                <h3 class="ttl common_bookttl">
                    <span class="entxt enb">FEATURES</span>
                    <span class="jp">特長</span>
                </h3>
                <p class="lead">伴走支援と経験に基づく確かな再現性。<br>ブックダムが選ばれる理由をご紹介します。</p>
            </div>
            <div class="commonlinkarea__link--arrow">→</div>
        </a>
        <a href="<?php echo home_url('service/'); ?>" class="commonlinkarea__link">
            <div class="commonlinkarea__link--txtbox">
                <h3 class="ttl common_bookttl">
                    <span class="entxt enb">SERVICE</span>
                    <span class="jp">サービス紹介</span>
                </h3>
                <p class="lead">企画から流通、販促、マーケティングまで、書籍出版を<br class="pc">総合的にサポートするサービスをご提供します。</p>
            </div>
            <div class="commonlinkarea__link--arrow">→</div>
        </a>
        <!-- <a href="<?php echo home_url('case/'); ?>" class="commonlinkarea__link">
            <div class="commonlinkarea__link--txtbox">
                <h3 class="ttl common_bookttl">
                    <span class="entxt enb">CASE</span>
                    <span class="jp">事例紹介</span>
                </h3>
                <p class="lead">書籍を通じてブランド力向上や採用強化など、多岐に<br class="pc">わたる成功事例とともに企業出版の効果をご紹介します。</p>
            </div>
            <div class="commonlinkarea__link--arrow">→</div>
        </a> -->
        <a href="<?php echo home_url('features/'); ?>" class="commonlinkarea__link">
            <div class="commonlinkarea__link--txtbox">
                <h3 class="ttl common_bookttl">
                    <span class="entxt enb">ABOUT US</span>
                    <span class="jp">私たちについて</span>
                </h3>
                <p class="lead">私たちは、出版を通じてお客様の想いや価値を形にし、<br class="pc">共に成長を目指すパートナーです。</p>
            </div>
            <div class="commonlinkarea__link--arrow">→</div>
        </a>
    </div>
</div>
<?php get_footer(); ?>