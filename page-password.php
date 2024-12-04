<?php get_header(); ?>
    
    <!-- @main -->
    <main class="contactpage">
        <!-- contact// -->
        <div class="contact password">
            <div class="contact_container">
                <div class="contact_wrapper">
                    <div class="contact_heading c-heading">
                        <span></span>
                        <h2>PASSWORD</h2>
                    </div>
                    <div class="contact_desc">
                        動画に設定されたパスワードにつきましては以下のフォームをご利用ください。<br />
                        <a href="<?= home_url(); ?>/privacy-policy/">プライバシーポリシーをご確</a>認いただき同意の上、送信してください。
                    </div>

                    <div class="contact_form">
                        <h3>※印は入力必須項目です</h3>

                        <?php echo do_shortcode('[contact-form-7 id="ef37531" title="PASS" html_id="js-form"]') ?>

                        <!-- # -->
                        <div class="contact_checkbox">
                            <input id="js-checkbox" name="checkbox" type="checkbox">
                            <div class="privacy">
                                <a href="<?= home_url(); ?>/privacy-policy/">プライバシーポリシーに同意</a>します。
                            </div>
                        </div>
                        <!-- # -->
                        <div class="contact_submit js-send">
                            <input type="submit" id="submit_btn" class="btn" value="SEND">
                        </div>
                        <!-- # -->
                        <div class="contact_noti js-noti">
                            <p>ありがとうございます。 メッセージは送信されました。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contact -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>