Þ    -        =   ì      à  )   á  (        4     N     [  z  j     å     ÷          +  $   D  !   i          ¥     8	     F	  '   N	     v	  -   	  &   °	  $   ×	  %   ü	  $   "
     G
    c
      r                    ¥     ¼     Ø     Û     í       ?        ^     x            w   0  1   ¨     Ú  %   y  -    2   Í  1      0   2     c     |  u       ÿ  '     (   @  $   i  @     -   Ï  (   ý  §   &     Î     â  9   ò     ,  3   3  8   g  2      ;   Ó  8     $   H  -  m  ,   !  º   È!  ·   "     ;#     H#  &   f#     #     #     ¯#  2   Ê#  `   ý#     ^$  $   }$     ¢$  ð   ©$     %  W   .&  í   &  G   t'         '         "   *                          
         %                +                                           	   #              )          (          -                             ,      &      !      $     - Force Time Condition False Destination  - Force Time Condition True Destination Add Call Flow Toggle Code Applications Associate with By default, the Call Flow Control module will not hook Time Conditions allowing one to associate a call flow toggle feauture code with a time condition since time conditions have their own feature code as of version 2.9. If there is already an associaiton configured (on an upgraded system), this will have no affect for the Time Conditions that are effected. Setting this to true reverts the 2.8 and prior behavior by allowing for the use of a call flow toggle to be associated with a time conditon. This can be useful for two scenarios. First, to override a Time Condition without the automatic resetting that occurs with the built in Time Condition overrides. The second use is the ability to associate a single call flow toggle with multiple time conditions thus creating a <b>master switch</b> that can be used to override several possible call flows through different time conditions. Call Flow Control Call Flow Control Module Call Flow Toggle (%s) : %s Call Flow Toggle Control Call Flow Toggle Feature Code Index: Call Flow Toggle Mode Association Call Flow Toggle: %s (%s) Call Flow manual toggle control - allows for two destinations to be chosen and provides a feature code		that toggles between the two destinations. Current Mode: Default Delete Call Flow Toggle Feature Code %s Description Description for this Call Flow Toggle Control Destination to use when set to %s mode ERROR: failed to alter primary keys  Forces to Normal Mode (Green/BLF off) Forces to Override Mode (Red/BLF on) Hook Time Conditions Module If a selection is made, this timecondition will be associated with the specified call flow toggle  featurecode. This means that if the Call Flow Feature code is set to override (Red/BLF on) then this time condition will always go to its True destination if the chosen association is to 'Force Time Condition True Destination' and it will always go to its False destination if the association is with the 'Force Time Condition False Destination'. When the associated Call Flow Control Feature code is in its Normal mode (Green/BLF off), then then this Time Condition will operate as normal based on the current time. The Destinations that are part of any Associated Call Flow Control Feature Code will have no affect on where a call will go if passing through this time condition. The only thing that is done when making an association is allowing the override state of a Call Flow Toggle to force this time condition to always follow one of its two destinations when that associated Call Flow Toggle is in its override (Red/BLF on) state. Linked to Time Condition %s - %s Message to be played in normal mode (Green/BLF off).<br>To add additional recordings use the "System Recordings" MENU to the left Message to be played in override mode (Red/BLF on).<br>To add additional recordings use the "System Recordings" MENU to the left No Association Normal (Green/BLF off) Normal Flow (Green/BLF off) OK Optional Password Override (Red/BLF on) Override Flow (Red/BLF on) Please enter a valid numeric password, only numbers are allowed Recording for Normal Mode Recording for Override Mode Save There are a total of 10 Feature code objects, 0-9, each can control a call flow and be toggled using the call flow toggle feature code plus the index. This will change the current state for this Call Flow Toggle Control, or set the initial state when creating a new one. Use feature code: %s to toggle the call flow mode You can optionally include a password to authenticate before toggling the call flow. If left blank anyone can use the feature code and it will be un-protected changing primary keys to all fields.. Project-Id-Version: FreePBX
Report-Msgid-Bugs-To: 
POT-Creation-Date: 2013-11-05 19:32+0900
PO-Revision-Date: 2013-11-07 13:00+0900
Last-Translator: 
Language-Team: 
Language: Japanese
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 1.5.7
 å¼·å¶çã«æéæ¡ä»¶ãFalseå®åã«ããã å¼·å¶çã«æéæ¡ä»¶ãTrueå®åã«ããã ã³ã¼ã«ãã­ã¼åãæ¿ãã³ã¼ããè¿½å  ã¢ããªã±ã¼ã·ã§ã³ æ¬¡ã¨é£å æéæ¡ä»¶ã¯ãã¼ã¸ã§ã³2.9ããç¬èªã®ã­ã¼ã³ã¼ããæã¤ããã«ãªã£ããããããã©ã«ãã§ã¯ãã³ã¼ã«ãã­ã¼å¶å¾¡ã¢ã¸ã¥ã¼ã«ã¯ã³ã¼ã«ãã­ã¼åãæ¿ãã­ã¼ã³ã¼ããæéæ¡ä»¶ã¨é£åãããã¨ãè¨±å¯ãããæéæ¡ä»¶ãããã¯ãã¾ãããæ¢ã«é£åè¨­å®ãããã¦ããå ´å(ã¢ããã°ã¬ã¼ããããã·ã¹ãã ä¸ã§)ãæå¹ãªãæéæ¡ä»¶ãã«å½±é¿ããããã¾ãããããããtrueãã«è¨­å®ãããã¨ã§ãæéæ¡ä»¶ã«é£åããã³ã¼ã«ãã­ã¼åãæ¿ãã®ä»æ§ãè¨±å¯ãããã¨ã§2.8ãããä»¥åã«æ»ãã¾ãããã®æ©è½ã¯ï¼ã¤ã®ã·ããªãªã§æå¹ã§ããç¬¬ä¸ã«ããã«ãã¤ã³ã®ãæéæ¡ä»¶ãä¸æ¸ãã«ãã£ã¦çºçããèªåãªã»ãããªãã§ããæéæ¡ä»¶ããä¸æ¸ããããããäºçªç®ã®ä½¿ç¨æ¹æ³ã¯ããã®ããã«ç°ãªãæéæ¡ä»¶ãéãã¦è¤æ°ã®å¯è½ãªã³ã¼ã«ãã­ã¼ãä¸æ¸ãããããã«ä½¿ç¨ããã<b>ãã¹ã¿ã¼ã¹ã¤ãã</b>ãä½æãã¦ãåä¸ã®ã³ã¼ã«ãã­ã¼åãæ¿ããè¤æ°ã®æéæ¡ä»¶ã¨é£åãããæ©è½ã§ãã ã³ã¼ã«ãã­ã¼å¶å¾¡ ã³ã¼ã«ãã­ã¼å¶å¾¡ã¢ã¸ã¥ã¼ã« ã³ã¼ã«ãã­ã¼åãæ¿ã (%s) : %s ã³ã¼ã«ãã­ã¼åãæ¿ãå¶å¾¡ ã³ã¼ã«ãã­ã¼åãæ¿ãã­ã¼ã³ã¼ãã¤ã³ããã¯ã¹: ã³ã¼ã«ãã­ã¼åãæ¿ãã¢ã¼ãé£å ã³ã¼ã«ãã­ã¼åãæ¿ã (%s) : %s ã³ã¼ã«ãã­ã¼ã®æåãã°ã«å¶å¾¡ - 2ã¤ã®å®åãé¸æã§ããããã«ãããã®2ã¤ã®å®åéãåãæ¿ããã­ã¼ã³ã¼ããæä¾ãã¾ãã ç¾å¨ã®ã¢ã¼ã: ããã©ã«ã ã³ã¼ã«ãã­ã¼åãæ¿ãã­ã¼ã³ã¼ããåé¤ %s èª¬æ ãã®ã³ã¼ã«ãã­ã¼åãæ¿ãå¶å¾¡ã®èª¬æ %sã¢ã¼ãã«ã»ãããããæã«ä½¿ç¨ããå®å ã¨ã©ã¼: ãã©ã¤ããªã­ã¼ã®å¤æ´ã«å¤±æ å¼·å¶çã«ãã¼ãã«ã¢ã¼ãã«ãã (ç·/BLF ãªã) å¼·å¶çã«ä¸æ¸ãã¢ã¼ãã«ãã (èµ¤/BLF ãªã³) æéæ¡ä»¶ããã¯ã¢ã¸ã¥ã¼ã« é¸æãããå ´åããã®æéæ¡ä»¶ã¯æå®ãããã³ã¼ã«ãã­ã¼åãæ¿ãã­ã¼ã³ã¼ãã¨é¢é£ã¥ãããã¾ããããã¯ãããã³ã¼ã«ãã­ã¼ã­ã¼ã³ã¼ããä¸æ¸ã (èµ¤/BLF ãªã³)ã«è¨­å®ãããå ´åãããé¸æãããé¢é£ä»ããããå¼·å¶çã«æéæ¡ä»¶ãTrueã®å®åã«ãããã ã£ãå ´åãã®æéæ¡ä»¶ã¯å¸¸ã«ãã®Trueã®å®åã«ç§»åããé¢é£ä»ãããå¼·å¶çã«æéæ¡ä»¶ãFalseã®å®åã«ãããã ã£ãå ´åã¯å¸¸ã«Falseã®å®åã«ç§»åãã¾ããé¢é£ä»ããããã³ã¼ã«ãã­ã¼å¶å¾¡ã­ã¼ã³ã¼ãããã¼ãã«ã¢ã¼ã (ç·/BLF ãªã)ã®æã¯ããã®æéæ¡ä»¶ã¯ç¾å¨æéã«åºã¥ãã¦ãã¼ãã«ã¨ãã¦æä½ãã¾ãããã¥ããã«é¢é£ä»ããããã³ã¼ã«ãã­ã¼å¶å¾¡ã­ã¼ã³ã¼ãã®ä¸é¨ã§ããå®åã¯ããã®æéæ¡ä»¶ãéã£ãå ´åã¯ã³ã¼ã«ãã©ãã«ç§»åãããã«ã¯ä½ãã®å½±é¿ãä¸ãã¾ãããé¢é£ä»ããä½æãããéã«è¡ããããã¨ã¯ããã®é¢é£ä»ããããã³ã¼ã«ãã­ã¼åãæ¿ããä¸æ¸ãç¶æ(èµ¤/BLF ãªã³)ã®æã«ãã³ã¼ã«ãã­ã¼åãæ¿ãã®ä¸æ¸ãç¶æãããã®æéæ¡ä»¶ã«å¯¾ãã¦å¸¸ã«ãã®ï¼ã¤ã®å®åã®ãã¡ï¼ã¤ã«å¾ãããã«å¼·å¶ãããã¨ãè¨±å¯ãããã¨ã ãã§ãã æéæ¡ä»¶ã«ãªã³ã¯ãã¾ãã %s - %s ãã¼ãã«ã¢ã¼ãã§åçãããã¡ãã»ã¼ã¸ (ç·/BLF ãªã³)<br> ããã«é²é³ãè¿½å ããå ´åã¯å·¦å´ã®"ã·ã¹ãã é²é³"ã¡ãã¥ã¼ãä½¿ç¨ãã¦ãã ããã ä¸æ¸ãã¢ã¼ãã§åçãããã¡ãã»ã¼ã¸ (èµ¤/BLF ãªã³)<br> ããã«é²é³ãè¿½å ããå ´åã¯å·¦å´ã®"ã·ã¹ãã é²é³"ã¡ãã¥ã¼ãä½¿ç¨ãã¦ãã ããã é£åãªã ãã¼ãã« (ç·/BLF ãªã) ãã¼ãã«ãã­ã¼ (ç·/BLF ãªã) OK ãªãã·ã§ã³ãã¹ã¯ã¼ã ä¸æ¸ã (èµ¤/BLF ãªã³) ãªã¼ãã¼ã©ã¼ã¤ããã­ã¼ (èµ¤/BLF ãªã³) æå¹ãªæ°å­ã®ãã¹ã¯ã¼ããå¥åãã¦ãã ãããæ°å­ã®ã¿è¨±å¯ããã¾ãã ãã¼ãã«ã¢ã¼ãã®é²é³ ä¸æ¸ãã¢ã¼ãã®ããã®é²é³ ä¿å­ åè¨ã§10åã®ã­ã¼ã³ã¼ãå®ä½ãå­å¨ãã¾ãã ã³ã¼ã«ãã­ã¼åãæ¿ãã­ã¼ã³ã¼ããã©ã¹ãã¤ã³ããã¯ã¹ãä½¿ç¨ãã¦ã0-9ããããã§ã³ã¼ã«ãã­ã¼ãå¶å¾¡ãåãæ¿ãããã¨ãå¯è½ã§ãã ãã®ã³ã¼ã«ãã­ã¼åãæ¿ãå¶å¾¡ã®ç¾ã¹ãã¼ã¿ã¹ãå¤æ´ããããæ°è¦ä½ææã«ã¯åæã¹ãã¼ã¿ã¹ãè¨­å®ãã¾ãã ã­ã¼ã³ã¼ããä½¿ç¨ãã:  %s ã³ã¼ã«ãã­ã¼ã¢ã¼ããåãæ¿ãããã ã³ã¼ã«ãã­ã¼ãåãæ¿ããåã®èªè¨¼ãã¹ã¯ã¼ãããªãã·ã§ã³ã¨ãã¦å«ããã¨ãå¯è½ã§ããç©ºç½ã«ãã¦ããã¨ãèª°ã§ãã­ã¼ã³ã¼ããä½¿ç¨ãããã¨ãã§ããã®ã§ãä¿è­·ããã¾ããã å¨ã¦ã®ãã£ã¼ã«ãã«å¯¾ãããã©ã¤ããªã­ã¼ãå¤æ´ä¸­.. 