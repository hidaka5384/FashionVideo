<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">ホーム</router-link> |
      <router-link to="/video">動画検索ページ</router-link> |
      <router-link to="/detail">Yahoo!検索ページ</router-link>
    </div>
    <router-view />
  </div>
</template>

<style lang="scss">
header {
  padding: 30px 4% 10px;

  background-color: #ffdbc9;
  animation: bg-color 15s infinite;
  -webkit-animation: bg-color 15s infinite;
}

#title {
  text-align: center;
  font-family: "Monotype Corsiva";
  font-size: 40px;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #000000;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #000000;

    &.router-link-exact-active {
      color: #ff4f02;
    }
  }
}

footer {
  padding: 60px 4% 10px;
  margin: 0 auto;
  font-family: "Monotype Corsiva";
  display: flex;
  justify-content: center;
  align-items: center;

  background-color: #ffdbc9;
  animation: bg-color 15s infinite;
  -webkit-animation: bg-color 15s infinite;
}

@-webkit-keyframes bg-color {
  0% {
    background-color: #ffdbc9;
  }
  10% {
    background-color: #00ff00;
  }
  20% {
    background-color: #f1c40f;
  }
  30% {
    background-color: #ffffcc;
  }
  40% {
    background-color: #1abc9c;
  }
  50% {
    background-color: #00ffff;
  }
  60% {
    background-color: #3498db;
  }
  70% {
    background-color: #ff33ff;
  }
  80% {
    background-color: #9b59b6;
  }
  90% {
    background-color: #e74c3c;
  }
  100% {
    background-color: #ffdbc9;
  }
}
@keyframes bg-color {
  0% {
    background-color: #ffdbc9;
  }
  10% {
    background-color: #00ff00;
  }
  20% {
    background-color: #f1c40f;
  }
  30% {
    background-color: #ffffcc;
  }
  40% {
    background-color: #1abc9c;
  }
  50% {
    background-color: #00ffff;
  }
  60% {
    background-color: #3498db;
  }
  70% {
    background-color: #ff33ff;
  }
  80% {
    background-color: #9b59b6;
  }
  90% {
    background-color: #e74c3c;
  }
  100% {
    background-color: #ffdbc9;
  }
}
</style>
