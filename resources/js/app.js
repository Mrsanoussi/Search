require('./bootstrap');

var Vue = require('vue');


var app = new Vue({
    el: '#app',
    data: {
      tags: ['php', 'js'],
      sportschools: [],
      selectedTags: []
    },
    computed: {
      activeCards: function() {
        if(this.selectedTags.length == 0) return this.cards;
        
        var activeCards = [];
        var filters = this.selectedTags;
        
        this.cards.forEach(function(card) {
          
          function cardContainsFilter(filter) {
            return card.tags.indexOf(filter) != -1;
          }
          
          if(filters.every(cardContainsFilter)) {
            activeCards.push(card);
          }
        });
        
        return activeCards;
      }
    }
  });

  
/*Vue.component('index', require('./components/index.vue'));

const app = new Vue({
    el: '#app',
    data:{
        categoryList: ['basicfit', 'fitforfree', 'davidlloyd'],
        categories: [],
        sportschools: [
            {
                id: "1",
                name: "basicfit",
                sportschool: "basicfit",
                description: "description about product",
                category:'basicfit'
            },
        ],
        computed: {
            selectedItems: function () {
              return this.items.filter(function (item) {
                return this.categories.includes(item.category);
              }, this);
            },
          },
    }
});*/

