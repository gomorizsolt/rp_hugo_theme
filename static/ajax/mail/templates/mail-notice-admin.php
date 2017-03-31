<style>
    .body-table, table{
        font-family: "Tahoma", sans-serif;
        color:#303030;
        background: #ebf4f3;
        font-size:18px;
    }
    .email-head{
        background: url(http://assets.regisphilibert.com/regisphilibert_logo.png) no-repeat center bottom 20px;
        height:120px;
    }
    .email-body{
        padding:30px;
        background:white;
        max-width:590px;
        margin:0 auto;
        border-radius:5px;
        font-size:20px;
    }
    .email-cite{
        font-family: "Courier New", sans-serif;
        font-style:italic;
        display:block;
        margin:1em 0;
    }
    .email-quote{
        margin:1em 0;
        color:#7e7878;
        border-left:2px solid #44b6ae;
        padding-left:20px;
        font-style:italic;
        max-width:450px;
    }
</style>
<table class="body-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: 'Tahoma' sans-serif;color: #303030;background: #ebf4f3;font-size: 18px;">
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                 <div class="email-head" style="background: url(http://assets.regisphilibert.com/regisphilibert_logo.png) no-repeat center bottom 20px;height: 120px;color:#ebf4f3">
                    Regis Philibert
                 </div>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding:0 20px">
                  <tr>
                      <td>
                          <div class="email-body" style="padding: 30px;background: white;max-width: 590px;margin: 0 auto;border-radius: 5px;font-size: 20px;">
                            <div class="email-cite" style="font-family: 'Courier New', sans-serif;font-style: italic;display: block;margin: 1em 0;">
                                - <?php echo $email ? $email : "regis@regis.com"; ?>
                            </div>
                            <div class="email-quote" style="margin: 1em 0;color: #7e7878;border-left: 2px solid #44b6ae;padding-left: 20px;font-style: italic;max-width: 450px;">
                                <?php $message = $message ? utf8_encode($message) : false; ?>
                                <?php echo $message ? nl2br(stripslashes($message)) : "Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Nullam id dolor id nibh ultricies vehicula ut id elit."; ?>
                            </div>
                          </div>
                      </td>
                  </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <div style="height:100px;color:#ebf4f3">Merci</div>
            <table>
        </td>
    </tr>
</table>
