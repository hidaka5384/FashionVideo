<template>
  <div>
    <br />
    <input class="hoge" v-model="keyword" placeholder="古着 メンズ" />
    <button class="hoge" @click="search_video">検索</button>
    <table cellspacing="0" cellpadding="5" v-show="results">
      <tr>
        <th width="50">
          <span>No</span>
        </th>
        <th width="200">
          <span>Video</span>
        </th>
        <th width="700">
          <span>Contents</span>
        </th>
      </tr>

      <tr v-for="(movie, index) in results" v-bind:key="movie.id.videoId">
        <!-- No -->
        <td valign="top" width="50">{{ index + 1 }}</td>
        <!-- Video -->
        <td valign="top" width="300">
          <a
            v-bind:href="'https://www.youtube.com/watch?v=' + movie.id.videoId"
          >
            <img
              width="300"
              height="200"
              v-bind:src="movie.snippet.thumbnails.medium.url"
            />
          </a>
        </td>
        <!-- titleとdescription -->
        <td align="left" valign="top" width="700">
          <router-link
            :to="{
              name: 'Detail',
              query: { videoId: movie.id.videoId, keyword: keyword },
            }"
          >
            <span style="color: #ff4f02"
              ><b>{{ movie.snippet.title }}</b></span
            >
          </router-link>
          <br />
          {{ movie.snippet.description }}
        </td>
      </tr>
    </table>
    <br />
    <router-link style="color: #ff4f02" to="/">ホームに戻る</router-link> |
    <router-link style="color: #ff4f02" to="/detail"
      >Yahoo!検索ページへ</router-link
    >
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "SearchVideo",
  data() {
    return {
      results: null,
      keyword: "",
      order: "viewCount", // リソースを再生回数の多い順に並べます。
      params: {
        q: "", // 検索クエリを指定します。
        part: "snippet",
        type: "video",
        maxResults: "30", // 最大検索数
        key: "AIzaSyAs6WfaeLtkvoTvOQqhUqfYppMnI5drR9c",
      },
    };
  },
  props: {
    msg: String,
  },
  methods: {
    search_video() {
      const vm = this;
      vm.params.q = vm.keyword;

      axios
        .get("https://www.googleapis.com/youtube/v3/search", {
          params: vm.params,
        })
        .then(function (res) {
          vm.results = res.data.items;
        });
    },
  },
};
</script>

<style>
input.hoge {
  width: 20%;
  height: 30px;
  margin-bottom: 40px;
}

button.hoge {
  height: 40px;
  margin-bottom: 40px;
}

table {
  border: solid 10px #ff4f02; /*表全体を線で囲う*/
  margin: 50px auto;
  border-radius: 20px;
  overflow: hidden;
}
table th {
  color: #000000; /*文字色*/
  background: #ffdbc9; /*背景色*/
  border: dashed 1px #ffdbc9;
}

table td {
  background: #fdf5e6;
  border: dashed 1px #ffdbc9;
}
</style>
