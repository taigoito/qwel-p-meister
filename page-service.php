<?php get_header();
  /**
   * Main
   * 
   */
  ?>
  <main id="main" class="main">
    <div class="main__wrapper">
      <div class="main__container">
        <article class="post --page">
          <h1 class="post__heading">
            <span class="post__headingLarge">
              <span class=" --text_gradient">service</span>
            </span>
            <span class="post__headingSmall">
              <span class="--textdec_left"></span><span class="--text_gradient">事業内容</span><span class="--textdec_right"></span>
            </span>
          </h1>
          <section class="pageSection --service --sectionFocus">
            <section>
              <div class="pageSection__intro">
                <p class="pageSection__lead --largeText_service">
                  <strong>
                    <span>私たちプロダクト・マイスターは、</span>
                    <span>ヒト<span class="--ls_shorten">、</span>技術<span class="--ls_shorten">、</span>場所<span class="--small">を</span>つなぎ<span class="--ls_shorten">、</span></span>
                    <span>ものづくり<span class="--small">の</span>価値<span class="--small">を</span>高める</span>
                    <span>トータルパートナー<span class="--small">です。</span></span>
                  </strong>
                </p>
              </div>
            </section>
            <section>
              <h3 class="pageSection__subheading">私たちのミッションである「モノづくり」
                <span class="--textdec_bottom --w_18"></span></h3>
              <p>モノをつくるのはヒトであり、ヒトに必要なのは技術であり、
                <br>ヒトと技術はさまざまな場所で活躍し、力を発揮していきます。
                <br>私たちは価値ある「モノづくり」のために、ヒト、技術、場所、すべてを、
                <br>企業様のご希望、ご要望に応じてご提供、ご提案することができます。
              </p>
            </section>
            <section>
              <h3 class="pageSection__subheading">例えば…
                <span class="--textdec_bottom --w_4"></span></h3>
              <p>製造現場へ<a class="--dispatch" href="#">ヒト</a>を派遣いたします。現場で技術を習得しながら、
                <br>現場の生産法や品質管理なども学び、業務効率化を実施、実現いたします。
              </p>
              <p><a class="--dispatch" href="#">ヒト</a>派遣で得た経験や<a class="--tech" href="#">技術</a>をそのまま弊社工場に移管、請負。
                <br>工場内で生産、品質管理することもできます。もちろん、弊社工場内での製造請負のみも対応可能です。
              </p>
              <p>そこからさらに、入荷、出荷を含めた<a class="--logistics" href="#">物流</a>（場所）にも対応することができます。
              </p>
              <figure class="pageSection__figure --artwork_service">
                <img src="<?php echo QWEL_THEME_URI . '/assets/artwork_service.svg'; ?>">
              </figure>
              <p><a class="--dispatch" href="#">ヒト</a>だけ、<a class="--tech" href="#">技術</a>だけ、<a class="--logistics" href="#">物流</a>だけ。あるいは、ヒトと場所、技術と場所など、
                <br>組み合わせは企業様のご希望・ご要望をお伝えください。
                <br>いずれの組み合わせ、どのような内容であっても、
                <br> 弊社は常に対応可能、決して「できない」「No」はありません。
              </p>
            </section>
            <section id="dispatch" class="pageSection__sub">
              <div class="pageSection__content">
                <h2 class="pageSection__title --serviceElement">
                  <span class="pageSection__titleSpan1 --dispatch">ヒト</span>
                  <span class="pageSection__titleSpan2"><span class="--text_gradient">dispatch</span></span>
                  <span class="pageSection__titleSpan3">人材派遣</span>
                </h2>
                <p>さまざまな業種の製造現場に、弊社社員（無期雇用）を派遣いたします。弊社社員として責任を持って派遣し、企業様の社員同様、真摯に業務に向き合います。派遣契約から製造請負への体制変更も可能です。</p>
              </div>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img01.jpg'; ?>">
              </figure>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img00.jpg'; ?>">
              </figure>
            </section>
            <section id="tech" class="pageSection__sub">
              <div class="pageSection__content">
                <h2 class="pageSection__title --serviceElement">
                  <span class="pageSection__titleSpan1 --tech">技術</span>
                  <span class="pageSection__titleSpan2"><span class="--text_gradient">factory/contract</span></span>
                  <span class="pageSection__titleSpan3">工場/製造請負</span>
                </h2>
                <p>弊社工場ではさまざまな工作機械を備え、企業様のアウトソーシングに対応しています。生産商材は、金属研磨や樹脂研磨、眼鏡検査・組立、水栓品組立・検査など。製造請負商材は、眼鏡部品、シリコーン樹脂成形、自動車部品選別・検査などです。どのような商材でも対応可能です。</p>
              </div>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img02.jpg'; ?>">
              </figure>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img03.jpg'; ?>">
              </figure>
            </section>
            <section id="logistics" class="pageSection__sub">
              <div class="pageSection__content">
                <h2 class="pageSection__title --serviceElement">
                  <span class="pageSection__titleSpan1 --logistics">場所</span>
                  <span class="pageSection__titleSpan2"><span class="--text_gradient">logistics</span></span>
                  <span class="pageSection__titleSpan3">物流</span>
                </h2>
                <p>弊社工場内で、製品保管～入荷～出荷まで対応可能です。</p>
              </div>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img04.jpg'; ?>">
              </figure>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img05.jpg'; ?>">
              </figure>
            </section>
            <section>
              <h2 class="pageSection__heading">できること実例</h2>
            </section>
            <section class="pageSection__sub">
              <div class="pageSection__content">
                <h3 class="pageSection__title --serviceCase">
                  <span class="pageSection__titleSpan1">[A社の場合]</span>
                  <span class="pageSection__titleSpan2"><span class="--dispatch">ヒト</span>×<span class="--tech">技術</span></span>
                </h3>
                <p>Ａ社に弊社社員を派遣。この時点で、弊社社員はＡ社の専門知識や技術は持ち合わせておりません。
                  <br>しかし、業務に対して真摯に向き合うこと約3年。弊社社員は専門知識や技術を身に付け、その部門にとって不可欠な存在となりました。もちろん、Ａ社社員との交流も深めて人間関係も良好です。今なお、Ａ社業務を支えるプロダクト･マイスターとして勤務を続けています。</p>
              </div>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img06.jpg'; ?>">
              </figure>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img07.jpg'; ?>">
              </figure>
            </section>
            <section class="pageSection__sub">
              <div class="pageSection__content">
                <h3 class="pageSection__title --serviceCase">
                  <span class="pageSection__titleSpan1">[B社の場合]</span>
                  <span class="pageSection__titleSpan2"><span class="--tech">技術</span>×<span class="--logistics">場所</span></span>
                </h3>
                <p>Ｂ社に数年間勤務していた弊社社員。その数年間でＢ社の技術や工程などを習得し、Ｂ社の社員をサポートできる役割も担うようになりました。
                  <br>そんな時、Ｂ社より「社内が手狭になってきたので、弊社で工程ごと引き受けることは可能か？」との打診があり、快諾。Ｂ社でプロダクト･マイスターとなった弊社社員のもと、弊社の広い工場で様々な業務をまとめてお任せいただいています。</p>
              </div>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img08.jpg'; ?>">
              </figure>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img09.jpg'; ?>">
              </figure>
            </section>
            <section class="pageSection__sub">
              <div class="pageSection__content">
                <h3 class="pageSection__title --serviceCase">
                  <span class="pageSection__titleSpan1">[C社の場合]</span>
                  <span class="pageSection__titleSpan2"><span class="--dispatch">ヒト</span>×<span class="--tech">技術</span>×<span class="--logistics">場所</span></span>
                </h3>
                <p>Ｃ社に弊社社員を派遣。プロダクト･マイスターとして商品管理や入出荷システムなども習得しました。
                  <br>ある時、Ｃ社とのお付き合いの中で輸送費の相談を受けました。日本の真ん中に位置する福井県からの発送であれば、輸送費の大幅ダウンが実現できることを提案しました。早速、入出荷システムごと弊社工場に移動したところ、輸送期間までも大幅に短縮でき、問題が一気に解決しました。</p>
              </div>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img10.jpg'; ?>">
              </figure>
              <figure class="pageSection__figure --grid_4">
                <img src="<?php echo QWEL_THEME_URI . '/assets/img11.jpg'; ?>">
              </figure>
            </section>
            <p class="pageSection__lead --passion">
              <span class="--text_gradient">
                <span class="--display_inlineBlock">まずはご相談ください。</span>
                <span class="--display_inlineBlock">なんでもやります。</span>
                <span class="--display_inlineBlock">決して「できない」</span>
                <span class="--display_inlineBlock">「Ｎｏ」は言いません！</span>
              </span>
            </p>
          </section>
        </article>
      </div>
    </div>
    <div class="main__cover"></div>
  </main><!-- #main -->
  <div id="cover" class="cover">
    <canvas id="sectionFocus" class="cover__sectionFocus"></canvas>
    <canvas id="pointerFocus" class="cover__pointerFocus"></canvas>
  </div><!-- #cover -->
<?php get_footer();
