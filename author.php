<?php get_header(); ?>

    <!-- @main -->
    <main class="memberpage">
        <!-- detail// -->
        <setion class="detail">
            <div class="detail_container">
                <div class="detail_profile">
                    <div class="detail_heading c-heading">
                        <span></span>
                        <h2>PROFILE</h2>
                    </div>
                    <div class="detail_profile_inner">
                        <div class="detail_profile_left">
                            <figure>
                                <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/img/member/avatar.webp" alt="中原 昌哉" width="300"
                                    height="300" draggable="false">
                            </figure>
                        </div>
                        <div class="detail_profile_right">
                            <div class="detail_profile_author">
                                <div class="jpname">
                                    <p class="last_name">中原</p>
                                    <p class="first_name">昌哉</p>
                                </div>
                                <div class="enname">
                                    <span>|</span>
                                    <p>Masaya Nakahara</p>
                                </div>
                                <a href="https://instagram.com/" class="insta" target="_blank"
                                    rel="noopener noreferrer">
                                    <svg id="insta" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20">
                                        <g id="Group_76" data-name="Group 76">
                                            <g id="Group_73" data-name="Group 73">
                                                <path id="Path_16" data-name="Path 16"
                                                    d="M38.583,44H29.417A5.423,5.423,0,0,1,24,38.583V29.417A5.423,5.423,0,0,1,29.417,24h9.166A5.423,5.423,0,0,1,44,29.417v9.167A5.423,5.423,0,0,1,38.583,44ZM29.417,25.667a3.754,3.754,0,0,0-3.75,3.75v9.167a3.754,3.754,0,0,0,3.75,3.75h9.166a3.754,3.754,0,0,0,3.75-3.75V29.417a3.754,3.754,0,0,0-3.75-3.75Z"
                                                    transform="translate(-24 -24)" />
                                            </g>
                                            <g id="Group_74" data-name="Group 74" transform="translate(5 5)">
                                                <path id="Path_17" data-name="Path 17"
                                                    d="M49,54a5,5,0,1,1,5-5A5.006,5.006,0,0,1,49,54Zm0-8.333A3.333,3.333,0,1,0,52.333,49,3.337,3.337,0,0,0,49,45.667Z"
                                                    transform="translate(-44 -44)" />
                                            </g>
                                            <g id="Group_75" data-name="Group 75" transform="translate(14.167 3.542)">
                                                <circle id="Ellipse_5" data-name="Ellipse 5" cx="1.146" cy="1.146"
                                                    r="1.146" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                            <div class="detail_profile_history">
                                <div class="detail_profile_content jphistory">
                                    <p>1973年 生まれ</p>
                                    <p>1995年 日本映画学校（現・日本映画大学）卒業</p>
                                    <p>2005年 シネマトグラファーとして独立</p>
                                </div>
                                <div class="detail_profile_content enhistory">
                                    <p>1973 – Born</p>
                                    <p>1995 – Graduates Japan Institute of the Moving Image</p>
                                    <p>2005 – Becomes a cinematographer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- # -->
                <div class="detail_works">
                    <div class="detail_heading c-heading">
                        <span></span>
                        <h2>WORKS</h2>
                    </div>
                    <div class="detail_works_list">
                        <!-- ## -->
                        <div class="detail_works_items">
                            <div class="detail_works_content" data-popup-toggler="0" data-password>
                                <figure>
                                    <img class="lazy" data-src="<?= get_template_directory_uri() ?>/assets/img/member/works.webp" alt="Suntory サン生"
                                        width="380" height="213.75" loading="lazy">
                                </figure>
                                <p>Suntory サン生</p>
                            </div>
                            <!-- // -->
                            <div class="detail_popup" data-popup="0">
                                <div class="detail_popup_close" data-popup-close>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="detail_popup_wrapper">
                                    <div class="detail_popup_inner">
                                        <div class="detail_popup_content">
                                            <div class="detail_pass" data-popup-password>
                                                <form>
                                                    <label for="password">パスワードを入力してください</label>
                                                    <input type="password" id="password" value="">
                                                    <button>送信</button>
                                                </form>
                                                <div class="detail_pass_notes">
                                                    ※ こちらの動画はパスワードが必要です。<br />
                                                    動画の視聴をご希望の方はこ<a href="/contact/password.html">ちらより</a>パスワードを請求してください
                                                </div>
                                            </div>
                                            <div class="detail_popup_video" data-popup-video>
                                                <p>Suntory サン生</p>
                                                <iframe width="560" height="315"
                                                    src="https://www.youtube.com/embed/xMPW9FWDFV0??fs=0&amp;rel=0&amp;modestbranding=1&amp;iv_load_policy=3&amp;start=0"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ## -->
                        <div class="detail_works_items">
                            <div class="detail_works_content" data-popup-toggler="1">
                                <figure>
                                    <img class="lazy" data-src="/assets/img/member/works.webp" alt="タイトルが入ります。タイトルが入ります。タイトルが入り
                                    ます。タイトルが入ります。" width="380" height="213.75" loading="lazy">
                                </figure>
                                <p>
                                    タイトルが入ります。タイトルが入ります。タイトルが入り<br />
                                    ます。タイトルが入ります。
                                </p>
                            </div>
                            <!-- // -->
                            <div class="detail_popup" data-popup="1">
                                <div class="detail_popup_close" data-popup-close>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="detail_popup_wrapper">
                                    <div class="detail_popup_inner">
                                        <div class="detail_popup_content">
                                            <div class="detail_popup_video" data-popup-video>
                                                <p>Suntory サン生</p>
                                                <video controls>
                                                    <source
                                                        src="https://www.suntory.co.jp/whisky/yamazaki/mp4/movie_pc.mp4"
                                                        type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail_loading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="43.841" height="22.628"
                            viewBox="0 0 43.841 22.628">
                            <g id="Group_79" data-name="Group 79" transform="translate(-698.08 -2990.793)">
                                <line id="Line_8" data-name="Line 8" y2="30"
                                    transform="translate(698.787 2991.5) rotate(-45)" fill="none" stroke="#000"
                                    stroke-linecap="square" stroke-width="1" />
                                <line id="Line_9" data-name="Line 9" x1="30"
                                    transform="translate(720 3012.713) rotate(-45)" fill="none" stroke="#000"
                                    stroke-linecap="square" stroke-width="1" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </setion>
        <!-- //detail -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>