<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render FAQ Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', $plugin['text'] ); ?></h3>
                    <div class="inside">

                        <p class="note">
                            <?php _e( 'If you have a question, please read the Frequently Asked Questions below to see if the answer is here.', $plugin['text'] ); ?>
                        </p>

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '22';
                                for ( $i = 1; $i <= $loopvalue; $i++ ) {
                                    echo '<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#collapse-group" href="#element' . $i . '">
                                                    <h4 class="panel-title"></h4>
                                                </a>
                                            </div>
                                            <div id="element' . $i . '" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                </div>
                                            </div>
                                          </div>';
                                }
                            ?>
                        </div>

                        <?php $i = 1; ?>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find a documentation for this plugin?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Please visit our %s Documentation site %s to view documentation.', $plugin['text'] ),
                                    '<a href="https://docs.spacexchimp.com" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Will this plugin work on my wordpress.COM website?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Sorry, this plugin is available for use only on self-hosted (wordpress.ORG) websites.', $plugin['text'] ); ?>
                            <br><br>
                            <?php _e( 'Please note that there is a difference between wordpress.COM and wordpress.ORG.', $plugin['text'] ); ?>
                            <?php _e( 'The wordpress.COM is a blog hosting service that offers a limited version of the popular self-hosted WordPress software.', $plugin['text'] ); ?>
                            <?php
                                printf(
                                    __( 'You can learn more about the difference here: %s .', $plugin['text'] ),
                                    '<a href="https://en.support.wordpress.com/com-vs-org/" target="_blank">https://en.support.wordpress.com/com-vs-org/</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Will this plugin work/compatible with the theme I use?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'This plugin is compatible with most themes.', $plugin['text'] ); ?>
                            <?php _e( 'But, unfortunately, we cannot check it with all third-party themes (especially paid ones) for compatibility, therefore there are cases when this plugin does not work with a third-party theme.', $plugin['text'] ); ?>
                            <?php _e( 'We constantly check this plugin for compatibility with third-party themes.', $plugin['text'] ); ?>
                            <?php _e( 'If we find that this plugin is incompatible with a third-party theme, and if we can fix it on our part, we release an update of our plugin to fix the problem.', $plugin['text'] ); ?>
                            <br><br>
                            <?php _e( 'If you find a conflict between our plugin and a third-party theme, please let us know and we will definitely release an update of our plugin to fix the problem.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Will this plugin work/compatible with other plugins that I use?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'This plugin is compatible with most plugins.', $plugin['text'] ); ?>
                            <?php _e( 'But, unfortunately, we cannot check it with all third-party plugins (especially paid ones) for compatibility, therefore there are cases when this plugin does not work with a third-party plugin.', $plugin['text'] ); ?>
                            <?php _e( 'We constantly check this plugin for compatibility with third-party plugins.', $plugin['text'] ); ?>
                            <?php _e( 'If we find that this plugin is incompatible with a third-party plugin, and if we can fix it on our part, we release an update of our plugin to fix the problem.', $plugin['text'] ); ?>
                            <br><br>
                            <?php _e( 'If you find a conflict between our plugin and a third-party plugin, please let us know and we will definitely release an update of our plugin to fix the problem.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Can I use this plugin on my language?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Yes.', $plugin['text'] ); ?>
                            <?php _e( 'This plugin is ready for translation and has already been translated into several languages.', $plugin['text'] ); ?>
                            <?php _e( 'But If your language is not available then you can make one.', $plugin['text'] ); ?>
                            <?php _e( 'It is also possible that not all existing translations are up-to-date or correct, so you are welcome to make corrections.', $plugin['text'] ); ?>
                            <?php _e( 'Many of plugin users would be delighted if you share your translation with the community.', $plugin['text'] ); ?>
                            <?php _e( 'Thanks for your contribution!', $plugin['text'] ); ?>
                            <br><br>
                            <?php
                                printf(
                                    __( 'If you want to help translate this plugin, please visit the %s.', $plugin['text'] ),
                                    '<a href="https://translate.wordpress.org/projects/wp-plugins/' . $plugin['slug'] . '" target="_blank">translation page</a>'
                                );
                            ?>
                            <?php _e( 'You can also use the POT file that is included and placed in the "languages" folder to create a translation PO file.', $plugin['text'] ); ?>
                            <?php
                                printf(
                                    __( 'Just send the PO file to us ( %s ) and we will include this translation within the next plugin update.', $plugin['text'] ),
                                    '<a href="mailto:support@spacexchimp.com?subject=New translation of the ' . $plugin['name'] . ' plugin">support@spacexchimp.com</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'How does it work?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'On the "Settings" tab, fill in the required fields and click the "Save changes" button.', $plugin['text'] ); ?>
                            <?php _e( 'Enjoy the improved SEO of your website.', $plugin['text'] ); ?>
                            <?php _e( 'It\'s that simple!', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'How much of description I can enter in the text field?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'We don\'t limit the number of characters, but most search engines use a maximum of 160 chars for the home description.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'How much of keywords I can enter in the text field?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'We don\'t limit the number of characters.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'What about compatibility with the plugin "All in One SEO Pack"?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'As far as we know, the "All Meta Tags" plugin is compatible with the "All in One SEO Pack" plugin.', $plugin['text'] ); ?>
                            <?php _e( 'But to make sure that these plugins do not conflict with each other, you need to follow one simple rule: do not fill the same field in both plugins at once.', $plugin['text'] ); ?>
                            <?php _e( 'Otherwise both plugins fulfill their work and you will get a duplicate actions, for example:', $plugin['text'] ); ?>
<pre><code>&lt;head&gt;
    ...
    &lt;meta name="copyright" content="Copyright (c) 2013-2021 Space X-Chimp. All Rights Reserved."&gt;
    ...
    &lt;meta name="copyright" content="Copyright 2021 Space X-Chimp. All Rights Reserved."&gt;
    ...
&lt;/head&gt;</code></pre>
                            <?php _e( 'If you find a conflict between the plugins, please let us know and we will definitely release an update of our plugin to fix the problem.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'What about compatibility with the plugin "Yoast SEO"?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'As far as we know, the "All Meta Tags" plugin is compatible with the "Yoast SEO" plugin.', $plugin['text'] ); ?>
                            <?php _e( 'But to make sure that these plugins do not conflict with each other, you need to follow one simple rule: do not fill the same field in both plugins at once.', $plugin['text'] ); ?>
                            <?php _e( 'Otherwise both plugins fulfill their work and you will get a duplicate actions.', $plugin['text'] ); ?>
                            <br><br>
                            <?php _e( 'If you find a conflict between the plugins, please let us know and we will definitely release an update of our plugin to fix the problem.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Does this plugin requires any modification of the theme?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Absolutely not.', $plugin['text'] ); ?>
                            <?php _e( 'This plugin is configurable entirely from the plugin settings page.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Does this require any knowledge of HTML or CSS?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Absolutely not.', $plugin['text'] ); ?>
                            <?php _e( 'This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?> question-red">
                            <?php _e( 'It\'s not working.', $plugin['text'] ); ?>
                            <?php _e( 'What could be wrong?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'As with every plugin, it\'s possible that things don\'t work.', $plugin['text'] ); ?>
                            <?php _e( 'It\'s impossible to tell what could be wrong exactly.', $plugin['text'] ); ?>
                            <?php _e( 'The most common reason for this is a web browser\'s cache.', $plugin['text'] ); ?>
                            <?php _e( 'Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load.', $plugin['text'] ); ?>
                            <?php _e( 'This is called the browser\'s cache.', $plugin['text'] ); ?>
                            <?php _e( 'Clearing your browser\'s cache may solve the problem.', $plugin['text'] ); ?>
                            <br><br>
                            <?php _e( 'If you post a support request in the plugin\'s support forum on WordPress.org, we\'d be happy to give it a look and try to help out.', $plugin['text'] ); ?>
                            <?php _e( 'Please include as much information as possible, including a link to your website where the problem can be seen.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?> question-red">
                            <?php _e( 'I can\'t get verify my website.', $plugin['text'] ); ?>
                            <?php _e( 'What am I doing wrong?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'The tag code which Google (or Bing, Yandex, Pinterest, Alexa, Norton, WOT, SpecificFeeds) gives you is confusing as you only have to paste in the serial key number/letters (<code>1234567890</code>) and not the whole tag (<code>&lt;meta name="google-site-verification" content=???1234567890??? /&gt;</code>).', $plugin['text'] ); ?>
                            <?php _e( 'So just paste that into the relevant field and you will see ???Success??? message appear within a few seconds.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?> question-red">
                            <?php _e( 'The last WordPress update is preventing me from editing my website that is using this plugin.', $plugin['text'] ); ?>
                            <?php _e( 'Why is this?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'This plugin can not cause such problem.', $plugin['text'] ); ?>
                            <?php _e( 'More likely, the problem are related to the settings of the website.', $plugin['text'] ); ?>
                            <?php _e( 'It could just be a cache, so please try to clear your website\'s cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser.', $plugin['text'] ); ?>
                            <?php _e( 'Also please try to re-login to the website, this too can help.', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?> question-red">
                            <?php _e( 'Where to report bug if found?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Bug reports are very welcome!', $plugin['text'] ); ?>
                            <?php
                                printf(
                                    __( 'Please visit our %s contact page %s and report.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'Please do not forget to specify the name of the plugin.', $plugin['text'] ); ?>
                            <?php _e( 'Thank you!', $plugin['text'] ); ?>
                            <br><br>
                            <?php _e( 'Please include as much information as possible, including a link to your website where the problem can be seen.', $plugin['text'] ); ?>
                            <?php _e( 'Describe in more detail what exactly you are seeing.', $plugin['text'] ); ?>
                            <?php _e( 'Here are some examples:', $plugin['text'] ); ?>
                            <br><br>
                            <ul class="custom-list">
                                <li><?php _e( 'Elements of the plugin settings page are not working.', $plugin['text'] ); ?></li>
                                <li><?php _e( 'An error message is displayed on the plugin settings page.', $plugin['text'] ); ?></li>
                                <li><?php _e( 'An error message is displayed on the front end of website.', $plugin['text'] ); ?></li>
                                <li><?php _e( 'An error message is displayed on the back end of website.', $plugin['text'] ); ?></li>
                                <li><?php _e( 'Website is crashed.', $plugin['text'] ); ?></li>
                            </ul>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where to share any ideas or suggestions to make the plugin better?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Any suggestions are very welcome!', $plugin['text'] ); ?>
                            <?php
                                printf(
                                    __( 'Please visit our %s contact page %s.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'Please do not forget to specify the name of the plugin.', $plugin['text'] ); ?>
                            <?php _e( 'Thank you!', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'I love this plugin!', $plugin['text'] ); ?>
                            <?php _e( 'Can I help somehow?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php _e( 'Yes, any contributions are very welcome!', $plugin['text'] ); ?>
                            <?php
                                printf(
                                    __( 'Please visit our %s Support Us %s page.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/donate.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'Thank you!', $plugin['text'] ); ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find information about your licenses, payment process and refunds?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Answers to common questions about our licenses, payment process and refunds can be found on our %s Common Questions %s page.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find information about your customer support?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Answers to common questions about our customer support can be found on our %s Common Questions %s page.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'Where can I find information about your affiliate program?', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'Answers to common questions about our affiliate program can be found on our %s Common Questions %s page.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/faq.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                        </div>

                        <div class="question-<?php echo $i; ?>">
                            <?php _e( 'My question wasn\'t answered here.', $plugin['text'] ); ?>
                        </div>
                        <div class="answer-<?php echo $i; $i++ ?>">
                            <?php
                                printf(
                                    __( 'You can ask your question on %s this page %s.', $plugin['text'] ),
                                    '<a href="https://www.spacexchimp.com/contact.html" target="_blank">',
                                    '</a>'
                                );
                            ?>
                            <?php _e( 'But please keep in mind that this plugin is free, and there is no a special support team, so we have no way to answer everyone.', $plugin['text'] ); ?>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php
