<?php
/**
 * By: Symatic Solutions <info@symaticsolutions.com>
 * Date: 21/1/17
 * Time: 2:43 PM
 * Website: http://www.symaticsolutions.com
 * Skype: symatic.solutions
 *
 *
 * Provide an admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://symaticsolutions.com
 * @since      1.0.0
 *
 * @package    Picsascii
 * @subpackage Picsascii/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
    <h2>PicsAscii Settings</h2>
    <div class="stuffbox">
        <div class="inside">
            <form method="post" action="options.php">
                <?php
                    settings_fields( 'picsascii-settings-group' );
                    do_settings_sections( 'picsascii-settings-group' );
                ?>

                <table class="form-table">
                    <tr>
                        <td>
                            <p>Provide X and Y font size (Default is 4/2 Px).<br/>Changing font size will result in overall height and width of the ASCII image.</p>
                        </td>
                        <td rowspan="4" valign="top">
                            <h3><label><span>Shortcode</span></label></h3>
                            <p class="text-center">PicsAscii plugin offers simple shortcode to access its functionality.</p>
                            <h2 style="letter-spacing:3px;"><center>[picsascii]</center></h2>
                            <br>
                            <p class="text-center">Use above shortcode anywhere in you page/post and enable a functionality
                                to convert image to its ASCII representation.</p>
                        </td>
                    <tr>
                    <tr valign="top">
                        <td scope="row">
                            <b>Font Size X / Y :</b> <input type="text" name="picsascii_font_size_x" value="<?php echo  esc_attr( get_option('picsascii_font_size_x') ); ?>" size="5" />Px / <input type="text" name="picsascii_font_size_y" value="<?php echo  esc_attr( get_option('picsascii_font_size_y') );?>" size="5" />Px
                        </td>
                    </tr>
                    <tr valign="top">
                        <td scope="row">
                            <b>Remove uploaded Image? :</b> <input type="checkbox" name="picsascii_remove_image" value="1" <?php echo  (esc_attr( get_option('picsascii_remove_image') )) ? 'checked="checked"' : ''; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php submit_button(); ?>
                        </td>
                    <tr>
                </table>
            </form>
        </div>
    </div>


    <div class="stuffbox">
        <div class="inside">
            <h2>Sample Image:</h2>
            <pre style="font: <?php echo  esc_attr( get_option('picsascii_font_size_x') ); ?>px/<?php echo  esc_attr( get_option('picsascii_font_size_y') ); ?>px monospace;text-align:center">                                                                                                                                                     </br>
                                                         :|||||||||||||||||||||||||||                                                            </br>
                                                  |||||||||||||||||||||||||||||||||||||||||||                                                    </br>
                                            ||||||||||||||||||||||||||||||||||||||||||||||||||||||                                               </br>
                                        |||||||||||||||||:|TX00#################00T|:|||||||||||||||||:                                          </br>
                                    ||||||||||||||:|X0###################################0T:||||||||||||||                                       </br>
                                 ||||||||||||:|0###############################################X:||||||||||||                                    </br>
                              |||||||||||:T##################0XT|:::::::::::::|TX##################0:|||||||||||                                 </br>
                            ||||||||||:0#############0T::|||||||||||||||||||||||||||||::X##############X:||||||||||                              </br>
                         |||||||||||############0:||||||||||||||||||||||||||||||||||||||||||:T############X:|||||||||                            </br>
                       |||||||||:0##########0:|||||||||||||||||||||||||||||||||||||||||||||||||||T###########T|||||||||                          </br>
                     ||||||||||##########T||||||||||||||||||||||||||||||||||||||||||||||||||||||||||:0#########0:||||||||                        </br>
                   :||||||||X#########T||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||:0#########:||||||||                      </br>
                  T|||||||X########0:||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||#########:||||||||                    </br>
                ||||||||T########T|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||:|TT#########:|||||||                   </br>
               ||||||||########T|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||################0||||||||                 </br>
             ||||||||0#######X||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||:####################||||||||                </br>
            ||||||||#######0:|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||######################X|||||||               </br>
           |||||||T#######|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||0########################:||||||:             </br>
          |||||||0######0:|||||:::::::::|TTT:||||||||:TXT||:::::::::|||||:::::::::|TTX:|||||||||||:##########################||||||||            </br>
         ||||||:0############################|||||||:##################################X|||||||||||0##########################||||||||           </br>
        ||||||:#############################X||||||||X################################0:||||||||||||###########################T||||||           </br>
       |||||||0######################:||||||||||||||||||||||:##################|||||||||||||||||||||X###################00######|||||||          </br>
      |||||||0#######################0|||||||||||||||||||||||:##################:||||||||||||||||||||X###################:0######:||||||         </br>
      ||||||T######TX#################T|||||||||||||||||||||||T#################0|||||||||||||||||||||T##################::0######:||||||        </br>
     ||||||:######X|:##################||||||||||||||||||||||||0#################||||||||||||||||||||||:#################:|:######0||||||        </br>
     ||||||0#####0:||:#################0|||||||||||||||||||||||:##################:|||||||||||||||||||||:################|||T######|||||||       </br>
    |||||||######|||||T#################X||||||||||||||||||||||||#################0||||||||||||||||||||||:##############X||||0#####0||||||:      </br>
    ||||||0#####0||||||0#################||||||||||||||||||||||||X#################|||||||||||||||||||||||:#############|||||:######|||||||      </br>
   ||||||:######|||||||:#################0||||||||||||||||||||||||##################:|||||||||||||||||||||||############:|||||0#####0||||||      </br>
   ||||||X######:||||||||#################X|||||||||||||||||||||||:#################0|||||||||||||||||||||||0##########T||||||T######:|||||:     </br>
   ||||||0#####X|||||||||X#################:||||||||||||||||||||||||#################|||||||||||||||||||||||:##########:||||||:######||||||:     </br>
  :|||||:######|||||||||||0#################:|||||||||||||||||||||||X#################:|||||||||||||||||||||:#########|||||||||######X|||||:     </br>
  :|||||:######|||||||||||:#################X||||||||||||||||||||||||#################0|||||||||||||||||||||:0#######X|||||||||0#####0||||||     </br>
  :||||||######:||||||||||||#################:|||||||||||||||||||||||0#################T||||||||||||||||||||:0######0:|||||||||X#####0||||||     </br>
  :||||||######:||||||||||||X#################||||||||||||||||||||||T###################:|||||||||||||||||||:#######|||||||||||X#####0||||||     </br>
  :|||||:######:||||||||||||:0################X||||||||||||||||||||:####################0||||||||||||||||||||######T|||||||||||0#####0||||||     </br>
  .|||||:######||||||||||||||:#################:|||||||||||||||||||0#####################T||||||||||||||||||0#####0||||||||||||0#####X||||||     </br>
   |||||:######T||||||||||||||T#################:|||||||||||||||||T####0:#################:|||||||||||||||||######:|||||||||||:######T|||||:     </br>
   ||||||0#####0|||||||||||||||0################X||||||||||||||||:#####:|T################0||||||||||||||||0#####T|||||||||||||######||||||:     </br>
   :||||||######:||||||||||||||:#################:|||||||||||||||0####||||0################T|||||||||||||||#####0|||||||||||||X######||||||      </br>
   :|||||:######T||||||||||||||||#################:|||||||||||||T####0||||:#################:||||||||||||:######:||||||||||||:######X|||||:      </br>
    ||||||X######:|||||||||||||||T################X||||||||||||:#####:||||||################0||||||||||||######||||||||||||||T######:|||||:      </br>
    :|||||:######X||||||||||||||||0################||||||||||||0####||||||||X################T||||||||||T#####X|||||||||||||:######X||||||       </br>
     ||||||T######:|||||||||||||||:#################:||||||||||####X|||||||||0################:||||||||:######:|||||||||||||0######:|||||:       </br>
     :||||||0######:||||||||||||||||################X||||||||:#####:|||||||||:################0||||||||0#####||||||||||||||T######|||||||        </br>
      :|||||:######0||||||||||||||||X################||||||||0####:|||||||||||T################T|||||||#####X||||||||||||||######X||||||         </br>
       :||||||######0||||||||||||||||#################:||||||####X|||||||||||||0################:||||:0####0:|||||||||||||######0||||||:         </br>
       \'|||||||######0|||||||||||||||:################X||||:#####||||||||||||||:0################||||T#####:||||||||||||:#######:|||||:          </br>
        .||||||T######0:|||||||||||||||################||||0####:||||||||||||||||################T||:#####T|||||||||||||######0:|||||:           </br>
         .|||||||#######:||||||||||||||0################:|T####T|||||||||||||||||T################:|0####0||||||||||||X######0||||||:            </br>
          .|||||||#######T|||||||||||||:################X:####0|||||||||||||||||||0###############0|#####:||||||||||:#######0||||||:             </br>
            :|||||:0#######:||||||||||||:################0####:|||||||||||||||||||:#####################T||||||||||T#######T||||||:              </br>
             :||||||X#######X||||||||||||T###################|||||||||||||||||||||||###################0|||||||||:########:||||||:               </br>
              :||||||:########||||||||||||0#################0|||||||||||||||||||||||X##################:|||||||:########T|||||||\'                </br>
               .:|||||||########T|||||||||:#################:||||||||||||||||||||||||0################|||||||:0#######0:||||||:                  </br>
                 :|||||||X########X|||||||||###############||||||||||||||||||||||||||:###############0||||||#########:||||||:.                   </br>
                   :|||||||X########0:||||||X#############0||||||||||||||||||||||||||||##############:|||T#########||||||||:                     </br>
                    ::|||||||X#########X:||||0############:||||||||||||||||||||||||||||0############:||##########:|||||||:                       </br>
                      ::||||||||##########0:|:###########||||||||||||||||||||||||||||||:###########0##########0:|||||||:                         </br>
                        ::|||||||:X###########X#########X|||||||||||||||||||||||||||||||:###################:||||||||:                           </br>
                           :||||||||:X##################:|||||||||||||||||||||||||||||||||###############|||||||||::                             </br>
                             ::||||||||:T###############0X|:||||||||||||||||||||||::T00##############0||||||||||:\'                               </br>
                                ::|||||||||:X#######################000000#######################0|||||||||||::                                  </br>
                                   ::||||||||||:|0###########################################T:|||||||||||::                                     </br>
                                      :::||||||||||||:|X##############################0T:|||||||||||||::                                         </br>
                                          :::|||||||||||||||||::::|TTXXXXXT||::::||||||||||||||||:::                                             </br>
                                               ::::|||||||||||||||||||||||||||||||||||||||||:::.                                                 </br>
                                                     ::::::|||||||||||||||||||||||||:::::.                                                       </br>
                                                               .:::::::::::::::.                                                                 </br>
                                                                                                                                                 </br>
            </pre>
        </div>
    </div>
</div>
<p style="text-align: center">
    <span class="picsascii_title">PicsAscii</span>
    Version <?php echo $this->version; ?><br><br>
    <i class="fa fa-code fa-lg" aria-hidden="true"></i>&nbsp;with&nbsp;<i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red"></i>&nbsp;By&nbsp;<a href="http://symaticsolutions.com" target="_blank" class="bold">SYMATIC SOLUTIONS</a><br/>
    Code <i class="fa fa-code-fork fa-lg" aria-hidden="true"></i> By <a href="mailto:pagetelegram@gmail.com" target="_blank" class="bold">Jason Page</a>
</p>