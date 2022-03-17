<template>
  <div>
    <h1>Yahoo!ショッピング 商品検索</h1>
    <div>
      <input v-model="keyword" placeholder="カジュアル メンズ" />
      <button @click="search_goods">検索</button>

      <br /><iframe
        id="ytplayer"
        type="text/html"
        width="640"
        height="360"
        :src="`https://www.youtube.com/embed/${videoId}?autoplay=1`"
        frameborder="0"
      ></iframe>

      <table cellspacing="0" cellpadding="5" v-show="results">
        <tr>
          <th width="50">
            <span>No</span>
          </th>
          <th width="200">
            <span>商品</span>
          </th>
          <th width="700">
            <span>Contents</span>
          </th>
        </tr>

        <tr v-for="(goods, index) in results" v-bind:key="index">
          <!-- No -->
          <td valign="top" width="50">{{ index + 1 }}</td>
          <!-- 商品 -->
          <td valign="top" width="300">
            <a v-bind:href="goods.url">
              <img
                width="300"
                height="200"
                v-bind:src="
                  'https://item-shopping.c.yimg.jp/i/n/' + goods.imageId
                "
              />
            </a>
          </td>
          <!-- title-->
          <td align="left" valign="top" width="700">
            <span style="color: #ff4f02"
              ><b>{{ goods.name }}</b></span
            >
            <br />ブランド名：{{ goods.brand.name }} <br />売り手：{{
              goods.seller.name
            }}
            <span style="color: #ff4f02"
              ><br />値段：{{ goods.price }}円(税込み)</span
            >
          </td>
        </tr>
      </table>
    </div>
    <router-link style="color: #ff4f02" to="/">ホームに戻る</router-link> |
    <router-link style="color: #ff4f02" to="/video"
      >動画検索ページへ</router-link
    >
  </div>
</template>

<script>
/* eslint-disable no-console */
import axios from "axios";

export default {
  name: "YahoSearch",
  data() {
    return {
      results: null,
      keyword: this.$route.query.keyword,
      videoId: this.$route.query.videoId,
      order: "viewCount", // リソースを再生回数の多い順に並べます。
      params: {
        query: "", // 検索クエリを指定します。
        part: "snippet",
        type: "goods",
        results: "30", // 最大検索数
      },
    };
  },
  props: {
    msg: String,
  },
  created() {
    this.search_goods();
  },
  methods: {
    search_goods() {
      const vm = this;
      vm.params.query = vm.keyword;
      console.log(vm.params);

      axios
        .get("https://graymule9.sakura.ne.jp/yapis.php", { params: vm.params })
        .then((res) => {
          console.log("****test*****");
          vm.results = res.data.hits;
          console.log(vm.results);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>
