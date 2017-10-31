<article id="post-<?php the_ID(); ?>" <?php post_class('article') ?> role="article" itemscope="" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();?>

      <?php //タイトル上の広告表示
      if (is_ad_pos_above_title_visible() && is_all_adsenses_visible()){
        get_template_part_with_ad_format(get_ad_pos_above_title_format(), 'ad-above-title', is_ad_pos_above_title_label_visible());
      }; ?>

      <?php //投稿タイトル上ウイジェット
      if ( is_single() && is_active_sidebar( 'above-single-content-title' ) ): ?>
        <?php dynamic_sidebar( 'above-single-content-title' ); ?>
      <?php endif; ?>

      <header class="article-header entry-header">
        <h1 class="entry-title" itemprop="headline" rel="bookmark"><?php the_title() ?></h1>

        <?php //タイトル下の広告表示
        if (is_ad_pos_below_title_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_below_title_format(), 'ad-below-title', is_ad_pos_below_title_label_visible());
        }; ?>

        <?php //投稿タイトル下ウイジェット
        if ( is_single() && is_active_sidebar( 'below-single-content-title' ) ): ?>
          <?php dynamic_sidebar( 'below-single-content-title' ); ?>
        <?php endif; ?>

        <?php
        if (is_eyecatch_visible()) {
          get_template_part('tmp/eye-catch');//アイキャッチ挿入
        } ?>

        <?php //SNSシェアボタン
        if (is_sns_share_buttons_visible())
          get_template_part_with_option('tmp/sns-share-buttons', SS_TOP); ?>


        <?php //投稿日と更新日テンプレート
        get_template_part('tmp/date-tags'); ?>


         <?php //本文上の広告表示
        if (is_ad_pos_content_top_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_content_top_format(), 'ad-content-top', is_ad_pos_content_top_label_visible());
        }; ?>

        <?php //投稿本文上ウイジェット
        if ( is_single() && is_active_sidebar( 'single-content-top' ) ): ?>
          <?php dynamic_sidebar( 'single-content-top' ); ?>
        <?php endif; ?>

      </header>

      <div class="entry-content cf<?php echo get_additional_entry_content_classes(); ?>" itemprop="articleBody">
      <?php //記事本文の表示
        the_content(); ?>
      </div>

      <?php //マルチページ用のページャーリンク
      get_template_part('tmp/pager-page-links'); ?>

      <footer class="article-footer entry-footer">

        <?php //本文下の広告表示
        if (is_ad_pos_content_bottom_visible() && is_all_adsenses_visible()){
          //レスポンシブ広告のフォーマットにrectangleを指定する
          get_template_part_with_ad_format(get_ad_pos_content_bottom_format(), 'ad-content-bottom', is_ad_pos_content_bottom_label_visible());
        }; ?>

        <div class="entry-categories-tags">
          <?php the_category_links(); //カテゴリの出力
                the_tag_links(); //タグの出力?>
        </div>

        <?php //SNSシェアボタン上の広告表示
        if (is_ad_pos_above_sns_buttons_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_above_sns_buttons_format(), 'ad-above-sns-buttons', is_ad_pos_above_sns_buttons_label_visible());
        }; ?>

        <?php //SNSシェアボタン
        if (is_sns_share_buttons_visible())
          get_template_part_with_option('tmp/sns-share-buttons', SS_BOTTOM); ?>

        <?php //SNSフォローボタン
        if (is_sns_follow_buttons_visible())
          get_template_part('tmp/sns-follow-buttons'); ?>

        <?php //SNSシェアボタン上の広告表示
        if (is_ad_pos_below_sns_buttons_visible() && is_all_adsenses_visible()){
          get_template_part_with_ad_format(get_ad_pos_below_sns_buttons_format(), 'ad-below-sns-buttons', is_ad_pos_below_sns_buttons_label_visible());
        }; ?>

        <?php //投稿者等表示用のテンプレート
        get_template_part('tmp/footer-meta'); ?>

      </footer>

    <?php
    } // end while
  } //have_posts end if?>
</article>
