<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-EN" lang="en-EN">
<head>
    <title><?php echo $title ?></title>

    <meta charset="utf-8"/>
    <meta name="robots" content="noindex"/>
    <meta name="generator" content="Olympus"/>

    <style>
        #olympus-error{background:#fff;margin:100px auto 0;max-width:98%;width:800px}
        #olympus-error h1{color:#333;font:700 42px/40px sans-serif;margin:30px 0 0}
        #olympus-error p{color:#333;font:20px/28px Georgia,serif;margin:30px 0 0}
        #olympus-error code{display:inline-block;font:16px/28px monospace;padding:0 10px}
        #olympus-error code{background:rgba(31,107,255,.3);background:-webkit-linear-gradient(to right,rgba(191,38,255,.3) 0,rgba(152,55,255,.3) 28%,rgba(131,64,255,.3) 38%,rgba(91,81,255,.3) 61%,rgba(71,90,255,.3) 71%,rgba(31,107,255,.3) 100%);background:linear-gradient(to right,rgba(191,38,255,.3) 0,rgba(152,55,255,.3) 28%,rgba(131,64,255,.3) 38%,rgba(91,81,255,.3) 61%,rgba(71,90,255,.3) 71%,rgba(31,107,255,.3) 100%)}
        #olympus-error small{color:#333;display:block;font:14px/16px Georgia,serif;margin:30px 0 0}
        a{color:#1f6bff}a:hover{color:#475aff}
    </style>
</head>
<body>
    <div id="olympus-error">
        <h1><?php echo $title ?></h1>
        <p><?php echo $message ?></p>

        <small>
            <?php echo $type ?><br/>--<br/>
            Please, find more details on the <a href="https://github.com/GetOlympus" target="_blank">Olympus framework</a> repository.
        </small>
    </div>
</body>
</html>
