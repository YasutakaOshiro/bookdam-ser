<?php
/*
Template Name: 私たちについて
*/
?>

<?php get_header(); ?>
<div id="contents">
    <section class="undermv">
        <h1 class="undermv__ttl anim">
            <span class="entxt enb">ABOUT US</span>
            <span class="jp splittxt ttlAnim">私たちについて</span>
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
    <section class="about-us__message">
        <h2 class="message__ttl splittxt ttlAnim">あなたがいて、<br class="sp">世界が創られる</h2>
        <p class="lead anim"><span class="rich_fade">私たちは何よりも先んじて、<br>「何によって憶えられたいのか」を<br class="sp">一人ひとりに強く問いかけます。</span><br><br><span class="rich_fade">人間が生きた証は、<br class="sp">その人がどれだけ心から納得のいく<br class="sp">生き方をしたかによって、<br>色濃く刻み込まれ、<br class="sp">確実に未来へ受け継がれるからです。</span><br><br><span class="rich_fade">ブックダムを通じたあらゆる経験や出逢いが、<br>一人ひとりの人生において豊かで、<br class="sp">かけがえないものである。 </span><br><br><span class="rich_fade">心からそう思える個人の集合体が、<br class="sp">ブックダムという組織体を形成し、<br>企業としても、人間としても、<br class="sp">絶えず成長し続けていくことを目指しています。</span><br><br><span class="rich_fade">ブックダムから生みだされる本。 <br>そして、出版という社会に<br class="sp">価値を提供する手段に、<br class="sp">その想いと信念が宿っているのです。</span><br><br><span class="rich_fade">私たちが存在して生きた証を、<br class="sp">今日という一日に刻み込んでまいります。</span></p>
    </section>
    <div class="about-us__kv img_anim"><img src="<?php echo home_url('asset/img/about-us/img_kv01.webp'); ?>" alt=""></div>
    <section class="about-us__philosophy" id="anchor-philosophy">
        <div class="philosophy__box">
            <h2 class="philosophy__box--ttl">
                <span class="enb entxt splittxt ttlAnim">PHILOSOPHY</span>
                <span class="jp splittxt ttlAnim">経営理念</span>
            </h2>
            <div class="philosophy__box--contents">
                <dl>
                    <dt class="enb">MISSION</dt>
                    <dd>本と出版の価値を高め、<br class="sp">社会により良い影響を与える</dd>
                </dl>
                <div class="line"></div>
                <dl>
                    <dt class="enb">VISION</dt>
                    <dd>読者の未来をめくる</dd>
                </dl>
                <div class="line"></div>
                <dl>
                    <dt class="enb">VALUE</dt>
                    <dd class="type_flx">
                        <ul class="valuelist">
                            <li>①感謝の気持ちを持とう</li>
                            <li>②素直な気持ちを持とう</li>
                            <li>③謙虚であろう</li>
                            <li>④気持ちのいい挨拶をしよう</li>
                            <li>⑤互いの気持ちを尊重し合おう</li>
                        </ul>
                        <ul class="valuelist">
                            <li>⑥一期一会を大切にしよう</li>
                            <li>⑦スピードをもって取り組もう</li>
                            <li>⑧高いクオリティを実現しよう</li>
                            <li>⑨変化を恐れないでいよう</li>
                            <li>⑩自分たちの仕事に誇りを持とう</li>
                        </ul>
                    </dd>
                </dl>
                <div class="line"></div>
                <dl>
                    <dt class="enb">VISION MAP</dt>
                    <dd class="anim"><img src="<?php echo home_url('asset/img/about-us/img_vm01.webp'); ?>" alt="株式会社ブックダムビジョンマップ"></dd>
                </dl>
            </div>
        </div>
    </section>
    <section class="about-us__company" id="anchor-company">
        <h2 class="common_bookttl">
            <span class="enb entxt splittxt ttlAnim">COMPANY</span>
            <span class="jp splittxt ttlAnim">会社概要</span>
        </h2>
        <div class="basetable">
            <table>
                <tr>
                    <th>社名</th>
                    <td>株式会社ブックダム</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒171-0022<br>東京都豊島区南池袋1-16-15 ダイヤゲート池袋5階<a href="https://maps.app.goo.gl/e3n6w7U2nikcz3yh6" target="_blank" class="maplink">[MAP]</a><br><br>【アクセス】<br>西武池袋線「池袋」駅　西武南口　徒歩1~2分<br>JR・東武東上線・東京メトロ副都心線、有楽町線、丸ノ内線「池袋」駅東口　 徒歩5分〜10分</td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td>2019年12月</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><a href="tel" class="tel:03-5657-6744">03-5657-6744</a>（受付時間：平日 9時〜17時）<br><br>※弊社では在宅ワーク推奨のため、お電話が繋がりにくい場合がございます。<br>ご用件のある方は可能であれば「お問い合わせ」からご連絡くださいますよう宜しくお願い致します。</td>
                </tr>
                <tr>
                    <th>従業員数</th>
                    <td>5名（2025年6月現在）</td>
                </tr>
                <tr>
                    <th>取引銀行</th>
                    <td>みずほ銀行　きらぼし銀行　文化産業信用組合</td>
                </tr>
                <tr>
                    <th>顧問弁護士</th>
                    <td>豊泉法律事務所</td>
                </tr>
                <tr>
                    <th>顧問税理士</th>
                    <td>税理士法人AIF</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="about-us__staff" id="anchor-staff">
        <div class="staff__txtbox">
            <h2 class="common_bookttl">
                <span class="enb entxt splittxt ttlAnim">STAFF</span>
                <span class="jp splittxt ttlAnim">スタッフ紹介</span>
            </h2>
            <p class="lead">
                新しいことをはじめる時、誰とするかは大事。<br>御社と信頼を育み、共により良い未来をつくる<br class="sp">「パートナー」となれたら嬉しいです。
            </p>
        </div>
        <div class="staff__links">
            <a href="#staff01" class="staff__link">
                <img src="<?php echo home_url('asset/img/about-us/img_stafflink01.webp'); ?>" alt="">
            </a>
            <a href="#staff02" class="staff__link">
                <img src="<?php echo home_url('asset/img/about-us/img_stafflink02.webp'); ?>" alt="">
            </a>
            <a href="#staff04" class="staff__link">
                <img src="<?php echo home_url('asset/img/about-us/img_stafflink04.webp'); ?>" alt="">
            </a>
            <a href="#staff03" class="staff__link">
                <img src="<?php echo home_url('asset/img/about-us/img_stafflink03.webp'); ?>" alt="">
            </a>
        </div>
        <div class="staff__wrap">
            <div class="staff__box" id="staff01">
                <div class="staff__box--head">
                    <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/about-us/img_staff01.webp'); ?>" alt=""></div>
                    <div class="txtbox">
                        <h3 class="ttl">本と出版の可能性を、<br class="sp">誰よりも信じる人</h3>
                        <div class="namewrap">
                            <div class="position">代表取締役・マーケティング</div>
                            <div class="name">菊池 奈起<span class="small"> (きくち だいき)</span></div>
                        </div>
                        <ul class="snslist">
                            <li>
                                <a href="https://www.facebook.com/daiki.kikuchi.58/" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_facebook01.svg'); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="https://x.com/kikuchi_bookdam" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_x01.svg'); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="https://note.com/bookdam/m/m243c32918e2b" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_note01.svg'); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="https://podcasts.apple.com/jp/podcast/%E7%B5%8C%E5%96%B6%E3%81%A8%E5%BA%83%E5%A0%B1%E3%81%AE%E5%AF%BE%E8%A9%B1%E5%AE%A4-%E8%8F%8A%E7%90%86%E3%83%A9%E3%82%B8%E3%82%AA-kukuri-radio/id1760075033" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_pod01.svg'); ?>" alt=""></a>
                            </li>
                        </ul>
                        <dl>
                            <dt>経歴</dt>
                            <dd>
                                <ul class="historylist">
                                    <li>出版社(2008-2014年)</li>
                                    <li>医薬系広告代理店(2015-2017年)</li>
                                    <li>ベンチャー出版社創業参画(2018-2019年)</li>
                                    <li>ブックダム設立(2019年12月)</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="staff__box--body">
                    <dl>
                        <dt>自分は何によって憶えられたいか</dt>
                        <dd>本と出版の価値を未来に繋ぎ 調和した社会の実現に貢献した ブックダムの創業者</dd>
                    </dl>
                    <dl>
                        <dt>仕事で大切にしていること</dt>
                        <dd>感謝と狂気(自我を忘れるほどの情熱)</dd>
                    </dl>
                    <dl>
                        <dt>人生を変えてくれた本</dt>
                        <dd>
                            <ul class="innerul">
                                <li>『運気を引き寄せるリーダー 七つの心得 危機を好機に変える力とは』(田坂 広志)</li>
                                <li>『自分の中に毒を持て』(岡本 太郎)</li>
                                <li>『サンクチュアリ』(池上 遼一, 史村 翔)</li>
                                <li>『BLUE GIANT』(石塚 真一)</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>ブックダムの好きなところ</dt>
                        <dd>社員・お客様・お取引先・読者をはじめ、たくさんの「人」に恵まれているところ</dd>
                    </dl>
                    <dl>
                        <dt>お客様へのメッセージ</dt>
                        <dd>御社のビジョン実現を私たちの出版マーケティングを通じて後押しをする。<br class="pc">その想いは、より良い社会を未来に繋いでいくための祈りでもあります。<br class="pc">ぜひブックダムの企業出版で本を通じた御社のファンづくりをご一緒させてください！</dd>
                    </dl>
                </div>
            </div>
            <div class="staff__box" id="staff02">
                <div class="staff__box--head">
                    <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/about-us/img_staff02.webp'); ?>" alt=""></div>
                    <div class="txtbox">
                        <h3 class="ttl">溢れる情熱と確かな志</h3>
                        <div class="namewrap">
                            <div class="position">編集長</div>
                            <div class="name">三田 智朗<span class="small">  (さんだ ともあき)</span></div>
                        </div>
                        <ul class="snslist">
                            <li>
                                <a href="https://x.com/no_zangyo_pers" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_x01.svg'); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="https://note.com/bookdam/m/m8e449f940620" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_note01.svg'); ?>" alt=""></a>
                            </li>
                        </ul>
                        <dl>
                            <dt>経歴</dt>
                            <dd>
                                <ul class="historylist">
                                    <li>語学書専門出版社(2009-2014年)</li>
                                    <li>実用書出版社(2014-2016年)</li>
                                    <li>総合出版社(2016-2024年)</li>
                                    <li>ブックダム(2024年5月〜)</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="staff__box--body">
                    <dl>
                        <dt>自分は何によって憶えられたいか</dt>
                        <dd>本作りに日本一熱い編集者</dd>
                    </dl>
                    <dl>
                        <dt>仕事で大切にしていること</dt>
                        <dd>
                            <ul class="innerul">
                                <li>コンテンツの質をあげること</li>
                                <li>1ミリでもよりよくすること</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>人生を変えてくれた本</dt>
                        <dd>
                            <ul class="innerul">
                                <li>『燃えよ剣』（司馬 遼太郎）</li>
                                <li>『起業の教科書』（北尾 吉孝）</li>
                                <li>『落日燃ゆ』（城山 三郎）</li>
                                <li>『海と毒薬』（遠藤 周作）</li>
                                <li>『怪物に出会った日　井上尚弥と闘うということ』（森合 正範）</li>
                                <li>『新聞と戦争』（朝日新聞社「新聞と戦争」取材班）</li>
                                <li>『河北新報のいちばん長い日　震災下の地元紙』（河北新報社）</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>ブックダムの好きなところ</dt>
                        <dd>社長が熱い！</dd>
                    </dl>
                    <dl>
                        <dt>お客様へのメッセージ</dt>
                        <dd>心に残る、他を圧倒する、存在感が強い<br>そんな本づくりを目指しています！</dd>
                    </dl>
                </div>
            </div>
            <div class="staff__box" id="staff04">
                <div class="staff__box--head">
                    <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/about-us/img_staff04.webp'); ?>" alt=""></div>
                    <div class="txtbox">
                        <h3 class="ttl">真摯な行動が生む、確かな信頼</h3>
                        <div class="namewrap">
                            <div class="position">広報部</div>
                            <div class="name">大谷 理恵<span class="small">  (おおたに りえ)</span></div>
                        </div>
                        <ul class="snslist">
                            <li>
                                <a href="https://www.instagram.com/rie_bookdam" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_instagram01.svg'); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="https://x.com/bookdam" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_x01.svg'); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="https://note.com/bookdam/m/ma5a6b10c0cde" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_note01.svg'); ?>" alt=""></a>
                            </li>
                            <li>
                                <a href="https://podcasts.apple.com/jp/podcast/%E7%B5%8C%E5%96%B6%E3%81%A8%E5%BA%83%E5%A0%B1%E3%81%AE%E5%AF%BE%E8%A9%B1%E5%AE%A4-%E8%8F%8A%E7%90%86%E3%83%A9%E3%82%B8%E3%82%AA-kukuri-radio/id1760075033" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_pod01.svg'); ?>" alt=""></a>
                            </li>
                        </ul>
                        <dl>
                            <dt>経歴</dt>
                            <dd>
                                <ul class="historylist">
                                    <!-- <li>接客・販売業務に約12年間従事</li> -->
                                    <li>・国内航空会社 客室乗務員（2001-2005年）</li>
                                    <li>・大手アパレル会社（2007-2013年）</li>
                                    <li>・ホテルレストラン（2014年-2015年）</li>
                                    <li>・ベンチャー出版社（2020年-2021年）</li>
                                    <li>・ブックダム（2022年1月〜）</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="staff__box--body">
                    <dl>
                        <dt>自分は何によって憶えられたいか</dt>
                        <dd>ブックダムを創った、その一員であった人</dd>
                    </dl>
                    <dl>
                        <dt>仕事で大切にしていること</dt>
                        <dd>
                            <ul class="innerul">
                                <li>凡事徹底</li>
                                <li>感謝の心</li>
                                <li>信頼関係</li>
                                <li>情熱と挑戦</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>人生を変えてくれた本</dt>
                        <dd>
                            <ul class="innerul">
                                <li>『旅をする木』（星野 道夫）</li>
                                <li>『詩集　美しいとき』（若松 英輔）</li>
                                <li>『シュタイナーの人生論』（高橋 巌）</li>
                                <li>『一汁一菜でよいという提案』（土井 善晴）</li>
                                <li>『生きがいについて』（神谷 美恵子）</li>
                                <li>『今このとき、すばらしいこのとき』（ティク・ナット・ハン）</li>
                                <li>『海からの贈物』（アン・モロウ・リンドバーグ）</li>
                                <li>『完訳 7つの習慣』（スティーブン・R・コヴィー）</li>
                                <li>『プロフェッショナルの条件　いかに成果をあげ、成長するか』（P.F.ドラッカー）</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>ブックダムの好きなところ</dt>
                        <dd>
                            <ul class="innerul">
                                <li>全員経営・全員広報・全員営業</li>
                                <li>ブックダムビジョンマップがあること</li>
                                <li>好きと強みを活かせるところ</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>お客様へのメッセージ</dt>
                        <dd>１×１＝♾️（無限）<br>何をするかも大切ですが、私たちは誰とするか「人」を大切に思っています。<br class="pc">社会や組織をより良くしていきたいと思っている企業様<br class="pc">共に・一緒に、何かを創りたい、生み出したい、成長していきたいという気持ちがある企業様<br class="pc">同じの想いを共有し実現できたら、私たちはとても嬉しいです。<br class="pc">少しでも出版に興味がある、お話を聞いてみたいと思われましたらぜひお気軽にご連絡ください。<br class="pc">お会いできるのを楽しみにしております！</dd>
                    </dl>
                </div>
            </div>
            <div class="staff__box" id="staff03">
                <div class="staff__box--head">
                    <div class="imgbox img_anim"><img src="<?php echo home_url('asset/img/about-us/img_staff03.webp'); ?>" alt=""></div>
                    <div class="txtbox">
                        <h3 class="ttl">分析は冷静に、実行は迅速に</h3>
                        <div class="namewrap">
                            <div class="position">書店販売促進アドバイザー　</div>
                            <div class="name">近藤 午郎<span class="small">  (こんどう ごろう)</span></div>
                        </div>
                        <ul class="snslist">
                            <!-- <li>
                                <a href="https://x.com/goro_bookdam" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_x01.svg'); ?>" alt=""></a>
                            </li> -->
                            <li>
                                <a href="https://note.com/bookdam/m/mfe96b030f4b5" target="_blank" class="snslink"><img src="<?php echo home_url('asset/img/about-us/ico_note01.svg'); ?>" alt=""></a>
                            </li>
                        </ul>
                        <dl>
                            <dt>経歴</dt>
                            <dd>
                                <ul class="historylist">
                                    <li>書店外商（1989-2007）</li>
                                    <li>書店経営管理（2008-2021）</li>
                                    <li>出版社（2021〜現在に至る）</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="staff__box--body">
                    <dl>
                        <dt>自分は何によって憶えられたいか</dt>
                        <dd>産業としての書店が継続できる仕組みを作る</dd>
                    </dl>
                    <dl>
                        <dt>仕事で大切にしていること</dt>
                        <dd>物事の真理を考え、表面的な事象に流されない</dd>
                    </dl>
                    <dl>
                        <dt>人生を変えてくれた本</dt>
                        <dd>
                            <ul class="innerul">
                                <li>『プロフェッショナル・マネージャー』（ハロルド・ジェニーン）</li>
                                <li>『V字回復の経営』（三枝 匡）</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt>ブックダムの好きなところ</dt>
                        <dd>企業活動の目的がはっきりしている</dd>
                    </dl>
                    <dl>
                        <dt>お客様へのメッセージ</dt>
                        <dd>ブックダムは出版という手段の価値向上を目指す会社です。<br class="pc">様々な情報発信ツールが存在するいま、あえて出版をその手段にお選びいただく皆さまに<br class="pc">間違いのない価値をご提供して参ります。</dd>
                    </dl>
                </div>
            </div>
        </div>
        <p class="guide">この4名に加えて、<br class="sp">書店促進パートナー1名・経理1名を含め、<br class="sp">スタッフ数は6名です。（2025年8月現在）</p>
    </section>
    <div class="about-us__other">
        <ul class="other__list type_jcc">
            <li>
                <a href="<?php echo home_url('features/'); ?>" class="other__list--link">
                    <div class="headbox">
                        <h3 class="ttl">
                            <span class="enb entxt">FEATURES</span>
                            <span class="jp">特長</span>
                        </h3>
                        <div class="arrow">→</div>
                    </div>
                    <p class="lead">ブックダム独自の伴走型出版支援で、権威性・信頼性を高める企業ブランディングを実現します。</p>
                </a>
            </li>
            <li>
                <a href="<?php echo home_url('service/'); ?>" class="other__list--link">
                    <div class="headbox">
                        <h3 class="ttl">
                            <span class="enb entxt">SERVICE</span>
                            <span class="jp">サービス紹介</span>
                        </h3>
                        <div class="arrow">→</div>
                    </div>
                    <p class="lead">企画から流通、販促、マーケティングまで、書籍出版を総合的にサポートするサービスをご提供します。</p>
                </a>
            </li>
            <!-- <li>
                <a href="<?php echo home_url('case/'); ?>" class="other__list--link">
                    <div class="headbox">
                        <h3 class="ttl">
                            <span class="entxt enb">CASE</span>
                            <span class="jp">事例紹介</span>
                        </h3>
                        <div class="arrow">→</div>
                    </div>
                    <p class="lead">書籍を通じてブランド力向上や採用強化など、多岐にわたる成功事例とともに企業出版の効果をご紹介します。</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>
<?php get_footer(); ?>