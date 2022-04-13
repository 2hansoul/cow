<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CSS</title>
    <style>
      body {
        box-sizing: border-box;
        font-family: Consolas, monospace;
      }
      h1 {
        text-align: center;
      }
      img {
        max-width: 100%;
      }
      .a {
        width: 400px;
        margin: 0px auto;
      }
	  .a img {
  transition: all 0.2s linear;
}

    </style>
  </head>
  <body>
    <h1>이미지에 마우스 올리면 확대</h1>
    <div class="a">
      <img src="../cow/img/assets/img/portfolio/4.jpg" alt="">마우스를 올려보세요
    </div>
  </body>
</html>