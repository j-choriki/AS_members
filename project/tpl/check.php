<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>出欠確認</title>
</head>
<body>
    <header>
        <h1>出欠確認</h1>
    </header>

    <main>
        <section>
            <h2>出欠確認</h2>
            <p>●月✖︎日のAS</p>
            <form action="./check.html" method="get">
                <div>
                    <input type="radio" id="yes" name="check" value="yes">
                    <label for="yes">参加する</label>
                </div>
                <div>
                    <input type="radio" id="no" name="check" value="no">
                    <label for="no">参加しない</label>
                </div>
            </form>
            <button>送信</button>
        </section>
    </main>

    <footer>
        <p>hal Assinstant Staff</p>
    </footer>
<!-- <script></script> -->
</body>
</html>