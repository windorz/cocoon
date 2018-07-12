<?php /**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */ ?>
<div class="metabox-holder">

<!-- API -->
<div id="apis" class="postbox">
  <h2 class="hndle"><?php _e( 'API設定', THEME_NAME ) ?></h2>
  <div class="inside">

    <p><?php _e( '各種APIやアフィリエイトIDの設定です。', THEME_NAME ) ?></p>

    <table class="form-table">
      <tbody>

        <!-- Amazon -->
        <tr>
          <th scope="row">
            <?php
            generate_label_tag('', __('Amazon', THEME_NAME) );
            ?>
          </th>
          <td>
            <?php
            generate_label_tag(OP_AMAZON_API_ACCESS_KEY_ID, __( 'アクセスキーID', THEME_NAME ));
            echo '<br>';
            generate_textbox_tag(OP_AMAZON_API_ACCESS_KEY_ID, get_amazon_api_access_key_id(), __( '', THEME_NAME ));
            generate_tips_tag(__( 'Amazon APIを使用するためのアクセスキーIDを入力してください。', THEME_NAME ));

            generate_label_tag(OP_AMAZON_API_SECRET_KEY, __( 'シークレットキー', THEME_NAME ));
            echo '<br>';
            generate_textbox_tag(OP_AMAZON_API_SECRET_KEY, get_amazon_api_secret_key(), __( '', THEME_NAME ));
            generate_tips_tag(__( 'Amazon APIを使用するためのシークレットキーを入力してください。', THEME_NAME ));

            generate_label_tag(OP_AMAZON_ASSOCIATE_TRACKING_ID, __( 'トラッキングID', THEME_NAME ));
            echo '<br>';
            generate_textbox_tag(OP_AMAZON_ASSOCIATE_TRACKING_ID, get_amazon_associate_tracking_id(), __( '', THEME_NAME ));
            generate_tips_tag(__( 'AmazonアソシエイトのトラッキングIDを入力してください。', THEME_NAME ));
            ?>

          </td>
        </tr>

        <!-- 楽天 -->
        <tr>
          <th scope="row">
            <?php
            generate_label_tag('', __('楽天', THEME_NAME) );
            ?>
          </th>
          <td>
            <?php
            generate_label_tag(OP_RAKUTEN_AFFILIATE_ID, __( '楽天アフィリエイトID', THEME_NAME ));
            echo '<br>';
            generate_textbox_tag(OP_RAKUTEN_AFFILIATE_ID, get_amazon_api_access_key_id(), __( '', THEME_NAME ));
            generate_tips_tag(__( '楽天アフィリエイト用のIDを入力してください。', THEME_NAME ));
            ?>
          </td>
        </tr>


      </tbody>
    </table>

  </div>
</div>

</div><!-- /.metabox-holder -->