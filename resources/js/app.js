
import Vue from 'vue/dist/vue';

require ('./bootstrap');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

import LaborRateCalculator from "./components/LaborRateCalculator";

Vue.component('labor-rate-calculator', LaborRateCalculator);

const app = new Vue({
    el: '#app',
});

$(document).ready(function () {
    // Documentation Screen...
    if ($('#docsScreen').length) {
        require('./docs.js');
    }
});
