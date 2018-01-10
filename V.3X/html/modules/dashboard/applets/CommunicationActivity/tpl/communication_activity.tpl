<link rel="stylesheet" media="screen" type="text/css" href="modules/{$module_name}/applets/CommunicationActivity/tpl/css/styles.css" />
<script type='text/javascript' src='modules/{$module_name}/applets/CommunicationActivity/js/javascript.js'></script>
<div class='tabFormTable'>
    <div class='infoActivity'>
        <div class='typeActivity'>
            <b>{$LABEL_TOTAL_CALLS}: </b>
        </div>
        <div align='left' class='detailText'>
            {$LABEL_CALLS}<b>({$total})</b>개 중에
            <font color='green'><b>(내선 콜 {$internal} {$LABEL_INTERNAL_CALLS})</b></font> ,
            <font color='blue'> <b>(외선 콜 {$external} {$LABEL_EXTERNAL_CALLS})</b></font>를 처리중입니다
        </div>
        <div class='typeActivity'>
            <b>{$LABEL_TOTAL_CHANNELS}: </b>
        </div>
        <div align='left' class='detailActivity'>{$channel}을 처리중입니다</div>
        <div class='typeActivity'>
            <b>{$LABEL_QUEUES_WAITING}: </b>
        </div>
        <div align='left' class='detailActivity'><b>({$totalQueues})</b>개의 {$LABEL_WAITING}</div>
        <div class='typeActivity'><b>{$LABEL_EXTENSIONS}: </b></div>
        <div class='detailText'>{$LABEL_SIP_EXTENSIONS} <b>({$total_sip_Ext}) </b>:
            <font color='green'>({$sip_Ext_ok} {$LABEL_STATUS_OK})</font>
            <font color='red'>({$sip_Ext_nok} {$LABEL_STATUS_NO_OK})</font>
        </div>
        <div class='typeActivity'></div>
        <div class='detailText'>{$LABEL_IAX_EXTENSIONS} <b>({$total_iax_Ext}) </b>:
            <font color='green'>({$iax_Ext_ok} {$LABEL_STATUS_OK})</font>
            <font color='red'>({$iax_Ext_nok} {$LABEL_STATUS_NO_OK})</font>
        </div>
        <div class='typeActivity'><b>{$LABEL_TRUNKS}: </b></div>
        <div class='detailText'>{$LABEL_TRUNKS} <b>({$total_trunks}) </b>:
            <font color='green'>({$total_trunks_ok} {$LABEL_STATUS_OK})</font>
            <font color='red'>({$total_trunks_nok} {$LABEL_STATUS_NO_OK})</font>
            <font color='gray'>({$total_trunks_unk} {$LABEL_UNKNOWN})</font>
        </div>
        <div class='typeActivity'><b>{$LABEL_NETWORK_TRAFFIC}: </b></div>
        <div class='detailText'>{$LABEL_BYTES} :
            <font color='blue'><b>(수신 <span id='communication_activity_rx_bytes'>{$rx_bytes}</span>kB/s)</b></font>, <font color='red'><b>(송신 <span id='communication_activity_tx_bytes'>{$tx_bytes}</span>kB/s)</b></font>
        </div>
    </div>
</div>
