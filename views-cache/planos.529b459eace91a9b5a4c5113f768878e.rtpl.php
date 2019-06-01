<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
  .middle-cont {
    padding-left: 3px;
    padding-right: 3px;
  }
  .planos-meta {
    margin-bottom: 26px;
    text-align:center;
  }
  .planos-meta h1 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 40px;
      margin: 10px 0;
  }
  .planos-meta p {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    color: #969696;
    font-weight: 400;
    line-height: 25px;
    margin-bottom: 60px;
  }
  
  
      @font-face {              /* --- NEW ---  */
        font-family: 'Material Icons';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/materialicons/v36/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
      }

      .material-icons {               /* --- NEW ---  */
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -moz-font-feature-settings: 'liga';
        -moz-osx-font-smoothing: grayscale;
        text-align:center;
        width:100%;
        cursor:default;
      }

  .plans * {
    box-sizing: border-box !important;
  }
  .plans {
    font-family: Arial, Helvetica, sans-serif;
    margin-bottom: 34px;
  }
  
  #button_gold:hover{     /*NEW*/
    box-shadow: inset 1px 1px 50px 7px rgba(255,255,255,0.3),  0 8px 12px 0 rgba(0, 0, 0, 0.12), 0 0 12px 0 rgba(0, 0, 0, 0.12);
  }
  
  .plans .plan {
    margin-bottom: 20px;
    min-height: 421px;
    border: solid 1px rgba(0, 0, 0, 0.12);
    border-radius: 4px;
    overflow: hidden;
    padding: 24px 15px;
    text-align: center;
    width: 100%;
  }
  .plans .plan,
  .plans .plan button,
  .plans .plan .plan-title,
  .plans .plan .plan-title small,
  .plans .plan .plan-subtitle,
  .plans .plan .plan-subtitle a {
    font-family: Arial, Helvetica, sans-serif;
    transition: all 0.6s ease;
  }
  .plans .plan .plan-free button {
    padding-left: 15px;
    padding-right: 15px;
  }

  .plans .plan:hover {
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.12), 0 0 12px 0 rgba(0, 0, 0, 0.12);
  }

  .plans .plan .plan-subtitle a,
  .planos-meta h1 a {
    border-bottom: 1px solid #3B3B3B;
  }

  .plans .plan.plan-gold .plan-subtitle a {
    border-bottom: 1px solid #fff;
  }

  .plans .plan.plan-gold {
    background-color: #f5b841;
  }

  .plans .plan.plan-gold,
  .plans .plan.plan-gold .plan-subtitle,
  .plans .plan.plan-gold .plan-subtitle a,
  .plans .plan.plan-gold .plan-title,
  .plans .plan.plan-gold .plan-title small,
  .plans .plan.plan-gold .currency,
  .plans .plan.plan-gold .description {
    color: #fff !important;
  }

  .plans .plan.plan-gold button,
  .plans .plan.plan-gold:hover button {
    background: transparent;
    border-color: #fff;
    color: #fff;
  }

  .plans .plan:hover .plan-title,
  .plans .plan:hover .plan-title small,
  .plans .plan.plan-active .plan-title,
  .plans .plan.plan-active .plan-title small,
  .plans .plan:hover .plan-subtitle,
  .plans .plan:hover .plan-subtitle a,
  .plans .plan.plan-active .plan-subtitle {
    color: #6f007c;
  }
  .plans .plan:hover button,
  .plans .plan.plan-active button {
    color: #fff;
    background: #6f007c;
  }
  .plans .plan-title {
    color:#000;
    font-size: 24px;
    line-height: 32px;
    font-weight: 100;
    margin: 0 0 9px 0;
  }
  .plans .plan-title small {
    font-size: 14px;
    position: absolute;
  }
  .plans .plan-subtitle {
    position: relative;
    font-size: 15px;
    line-height: 20px;
    color: rgba(0, 0, 0, 0.54);
    font-weight: 300;
    margin-bottom: 24px;
    z-index: 2;
  }
  .plans .plan .pricing {
    display: table;
    margin: 0 auto 24px auto;
    padding: 10px 0;
  }
  .plans .plan .pricing .currency {
    font-size: 24px;
    color: #969696;
    padding: 0 10px 0 0;
    line-height: 28px;
    text-align: right;
  }
  .plans .plan .pricing .currency .plots,
  .plans .plan .pricing .currency .coin {
    display: block;
  }
  .plans .plan .pricing > span {
    display: table-cell;
    vertical-align: bottom;
  }
  .plans .plan .pricing .price {
    font-size: 68px;
    font-weight: 500;
    line-height: 58px;
  }
  .price{
    display: table;
    width:0%!important; 
    height:0px !important; 
    background: none !important; 
    }
  .plans .plan .pricing .cents {
    font-size: 34px;
    font-weight: normal;
    line-height: 36px;
  }
  .plans .plan .period {
    margin: auto;
    width: 100%;
    max-width: 156px;
    border: solid 1px rgba(0, 0, 0, 0.12);
    border-radius: 4px;
    font-size: 14px;
    color: rgba(0, 0, 0, 0.54);
    line-height: 40px;
    height: 42px;
    padding: 0 16px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url('/assets/elements/select_seta.png') right center no-repeat #fff;
  }
  .plans .description {
    font-size: 14px;
    line-height: 18px;
    color: rgba(0, 0, 0, 0.38);
    margin-bottom: 16px;
  }
  .plans .text-bottom {
    line-height: 18px;
    font-size: 14px;
    font-weight: 500;
    color: #6f007c;
  }
  .plans button {
    text-transform: uppercase;
    width: 100%;
    outline: none;
    margin: 48px auto 0 auto;
    font-weight: 600;
  }
  @media (max-width: 1199px) {
    .plans .plan {
      padding: 18px 16px;
    }
  }
  @media (max-width: 991px), (min-width: 1200px) {
    .plans .plan.plan-free .description {
      margin-bottom: 40px;
    }
  }
  @media (min-width: 992px) and (max-width: 1199px) {
    .plans .plan.plan-free .description {
      margin-bottom: 40px;
    }
  }

  .plans-table {
    margin-bottom: 60px !important;
  }
  .plans-table th {
    padding: 5px;
  }
  .plans-table th:not(.table-title) {
    text-align: center;
  }
  .plans-table th.table-title,
  .plans-table tr td:first-child {
    color: rgba(0, 0, 0, 0.38);
    text-align: left;
    font-size: 14px;
  }
  .plans-table tr td:first-child strong {
    display: block;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 100;
    color: #424242;
    font-size: 16px;
  }
  .plans-table tr td:first-child strong i {
    font-size: 16px;
      color: #6f007c;
      opacity: 1;
      width: 20px;
  }
  .plans-table th,
  .plans-table td {
    vertical-align: middle !important;
  }
  
  .plans-table td.plan_span_center{text-align:center;};  /* --- NEW ---  */
  
  .plans-table th.over,
  .plans-table th.highlighted,
  .plans-table td.highlighted {
    color: #6f007c !important;
  }

  .plans-table .material-icons {
    opacity: 1;
    height: 20px;
    color: #dd716f ;                  /* --- NEW ---  */
    
  }
  .plans-table tbody tr td:last-child .material-icons {
    opacity: 1 !important;
  }

  .btn-rounded {
    border: solid 1px #6f007c;
    background: #fff;
    border-radius: 100px;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    color: #6f007c;
    line-height: 18px;
    padding: 17px 12px;
  }

  .btn-rounded:hover, .btn-rounded:visited,
  .btn-rounded:active, .btn-rounded:link {
    color: #6f007c;
    text-decoration: none;
  }

  #depoimentos .depoimentos-meta .depoimentos-title {
      font-size: 41px;
      margin: 92px 0 22px 0;
      text-align: center;
      color: #121212;
      font-family: Arial, Helvetica, sans-serif;
    }
    #depoimentos .depoimentos-meta .rating {
      color: #838383;
      margin-bottom: 78px;
      font-family: Arial, Helvetica, sans-serif;
    }
    .promo-restrict {
      font-size: 13px;
      display: block;
    }

    .plans-table thead tr th:first-child {
      color: #212121;
      font-size: 20px;
      font-weight: 500;
    }

    .plans-table th {
	  font-family: Arial, Helvetica, sans-serif;
      border: 0 !important;
      font-weight: 100;
    }

    .plans-table tbody tr td {
      border-color: rgba(0, 0, 0, 0.12) !important;
    }

    .plans-table thead tr th:last-child,
    .plans-table thead tr th:last-child:hover {
        color: #3b3b3b;
        opacity: 1;
    }

    .comparison * {
      box-sizing: border-box !important;
    }

    .comparison {
      font-family: Arial, Helvetica, sans-serif;
      margin-bottom: 40px;
    }

    .comparison > div {
      font-size: 14px;
      color: rgba(0, 0, 0, 0.38);
      line-height: 20px;
    }

    .comparison > div h3 {
      color: #3b3b3b;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      margin-bottom: 15px;
    }

    .comparison .comparison-plan {
      border-radius: 4px;
      border: 1px solid rgba(0, 0, 0, 0.12);
      padding: 15px;
      margin-bottom: 20px;
    }

    div[data-toggle="tooltip"] {
      display: inline-block;
    }

    @media(min-width: 767px) {
      .comparison .comparison-plan {
        min-height: 300px;
      }
    }

  @media(min-width: 601px) {
    .plans-table thead tr th:not(:first-child) {
      min-width: 100px;
    }

    .plans-table thead tr th:first-child,
    .plans-table tbody tr td:first-child {
      width: 70%;
    }

    .plans-table thead tr th:not(:first-child),
    .plans-table tbody tr td:not(:first-child) {
      width: 10%;
    }

    .plans-table tr th {
      padding: 24px 8px !important;
    }

    .plans-table thead tr th:not(:first-child) {
      font-size: 15px;
    }

    .plans-table tr td {
      padding: 14px 8px !important;
    }

    .plans-table tr td:first-child,
    .plans-table tr th:first-child {
      padding-left: 0 !important;
    }

    .plans-table tr td:last-child,
    .plans-table tr th:last-child {
      padding-right: 0 !important;
    }


    @media(max-width: 600px) {
    
      .plans-table thead tr th:first-child,
      .plans-table tbody tr td:first-child {
        text-align: center;
      }

      .plans-table .table-title {
        padding-bottom: 40px;
      }

      .plans-table tbody tr {
        border: 1px solid rgba(0, 0, 0, 0.12) !important;
      }
      .plans-table tbody tr td:first-child {
        padding: 15px 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.12) !important;
        background-color: #fafafa;
      }

      .plans-table thead tr th:not(:first-child) {
        display: none;
      }

      .plans-table tbody tr td {
        display: block;
        border: 0 !important;
        min-height: 55px;
      }

      .plans-table tbody tr td:not(:first-child) {
        width: 25%;
        display: inline-block;
      }

      .plans-table tbody tr td:not(:first-child):before {
        content: attr(data-th);
        font-weight: bold;
        display: block;
      }

      div[data-toggle="tooltip"],
      .plans-table tr td:first-child strong {
        width: 100%;
      }
    
    }

    .ribbon-wrapper {
      width: 85px;
      height: 88px;
      overflow: hidden;
      position: absolute;
      top: -1px;
      right: 14px;
      z-index: 1;
    }

    .ribbon {
      font-size: 14px;
      color: #3b3b3b;
      text-align: center;
      text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
      -webkit-transform: rotate(45deg);
      -moz-transform:    rotate(45deg);
      -ms-transform:     rotate(45deg);
      -o-transform:      rotate(45deg);
      position: relative;
      padding: 7px 0;
      left: -5px;
      top: 15px;
      width: 120px;
      background-color: #6f007c;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#6f007c ), to(#6f007c));
      background-image: -webkit-linear-gradient(top, #6f007c , #6f007c);
      background-image:    -moz-linear-gradient(top, #6f007c , #6f007c);
      background-image:     -ms-linear-gradient(top, #6f007c , #6f007c);
      background-image:      -o-linear-gradient(top, #6f007c , #6f007c);
      color: #fff;
      -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
      -moz-box-shadow:    0px 0px 3px rgba(0,0,0,0.3);
      box-shadow:         0px 0px 3px rgba(0,0,0,0.3);
    }

    .ribbon:before, .ribbon:after {
      content: "";
      border-top:   3px solid #1E88E5;
      border-left:  3px solid transparent;
      border-right: 3px solid transparent;
      position: absolute;
      bottom: -3px;
    }

    .ribbon:before {
      left: 0;
    }
    .ribbon:after {
      right: 0;
    }
  /* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v12/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v36/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
  text-align:center;
  width:100%;
  cursor:default;
}
  </style>
  <link href="planos_arquivos/icon.css" rel="stylesheet">
  <link href="planos_arquivos/icon.css" rel="stylesheet">
  <link href="planos_arquivos/fonts_003.css" rel="stylesheet">
  <link href="planos_arquivos/fonts.css" rel="stylesheet">
  <link href="planos_arquivos/fonts_002.css" rel="stylesheet">
  <script src="planos_arquivos/a"></script>
  </header>
  
<section id="contacts">
    <div class="container">
  <div class="cnt_page">
    <div id="middle" style="">
      <div class="middle-cont">
        <div class="planos-meta">
          <h1 style="color: #000;" itemprop="name">Planos para Site de Casamento</h1> <p>Confira nossos planos e Compare</p> </div>
        <section class="row plans">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            
            <div class="plan plan-free">
              <h2 class="plan-title">15 DIAS <strong>FREE</strong></h2> <h3 class="plan-subtitle">Aproveite!</h3> <div class="pricing"> <div class="currency"> <strong class="plots">&nbsp;</strong> <span class="coin">R$</span> </div> <span class="price">0</span> <span class="cents">,00</span> </div> <p class="description">Nenhum cartão<br><strong>será solicitado.</strong></p> 
                            <button class="btn-rounded btn-plano-free" data-tracking="Página: Planos / Botão: Avalie por 10 dias (trial)">Teste por 15 dias</button> </div> </div> <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          
          <div class="plan plan-basico planos plano-basico"> 
                        <h2 class="plan-title"><strong>BÁSICO</strong></h2> 
                        <h3 class="plan-subtitle">Plano básico</h3> 
                        <div class="pricing"> 
                            <div class="currency"> 
                                <strong class="plots">6x</strong> 
                                <span class="coin">R$</span> 
                            </div> 
                            <span class="price inteiro">8</span> <span class="cents fracao">,33</span> 
                        </div> 
                        <p class="description">ou <span class="full-price">R$49,90</span> pelo período de:</p> 
                        <select class="period meses"> 
                            <option id="basico-0" value="0" data-instalment="6" data-priceinst="8.32" data-price="49,90" data-period="3" selected="selected">3 meses</option> 
                            <option id="basico-1" value="1" data-instalment="6" data-priceinst="9.98" data-price="59,90" data-period="4">4 meses</option> 
                            <option id="basico-2" value="2" data-instalment="6" data-priceinst="13.32" data-price="79,90" data-period="6">6 meses</option> 
                            <option id="basico-3" value="3" data-instalment="6" data-priceinst="16.65" data-price="99,90" data-period="9">9 meses</option> 
                            <option id="basico-4" value="4" data-instalment="6" data-priceinst="19.98" data-price="119,90" data-period="12">12 meses</option> 
                        </select> 
                        <button type="button" class="btn-rounded btn-plano-basico" onClick="goToPlan('basico', 'Página: Planos / Botão: Comece já (basico)')">Comece já</button> 
                    </div> 
                </div> 

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">          
          <div class="plan plan-classico planos plano-classico"> 
                        <h2 class="plan-title"><strong>CLÁSSICO</strong></h2> 
                        <h3 class="plan-subtitle">Intermediário</h3> 
                        <div class="pricing"> 
                            <div class="currency"> <strong class="plots">6x</strong> 
                                <span class="coin">R$</span> </div> 
                                <span class="price inteiro">13</span> <span class="cents fracao">,33</span> 
                            </div> <p class="description">ou <span class="full-price">R$89,90</span> pelo período de:</p>
                             <select class="period meses"> 
                                <option id="classico-0" value="0" data-instalment="6" data-priceinst="14.98" data-price="89,90" data-period="3" selected="selected">3 meses</option> 
                                <option id="classico-1" value="1" data-instalment="6" data-priceinst="16.65" data-price="99,90" data-period="4">4 meses</option> 
                                <option id="classico-2" value="2" data-instalment="6" data-priceinst="19.98" data-price="119,90" data-period="6">6 meses</option> 
                                <option id="classico-3" value="3" data-instalment="6" data-priceinst="23.32" data-price="139,90" data-period="9">9 meses</option> 
                                <option id="classico-4" value="4" data-instalment="6" data-priceinst="28.32" data-price="169,90" data-period="12">12 meses</option> 
                            </select> 
                            <button type="button" class="btn-rounded btn-plano-classico" onClick="goToPlan('classico', 'Página: Planos / Botão: Comece já (classico)')">Comece já</button> 
                        </div> 
                    </div>
          
          
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> 
                        <div class="plan plan-gold planos plano-gold">  
                            <h2 class="plan-title"><strong>GOLD</strong> </h2> 
                            <h3 class="plan-subtitle">Tudo incluso</h3> 
                            <div class="pricing"> 
                                <div class="currency"> <strong class="plots">6x</strong> <span class="coin">R$</span> 
                                </div> 
                                <span class="price inteiro">26</span> <span class="cents fracao">,66</span> 
                            </div> <p class="description">ou <span class="full-price">R$159,90</span> pelo período de:</p> 
                            <select class="period meses"> 
                                <option id="gold-0" value="0" data-instalment="6" data-priceinst="26.65" data-price="159,90" data-period="3" selected="selected">3 meses</option> 
                                <option id="gold-1" value="1" data-instalment="6" data-priceinst="29.98" data-price="179,90" data-period="4">4 meses</option> 
                                <option id="gold-2" value="2" data-instalment="6" data-priceinst="33.32" data-price="199,90" data-period="6">6 meses</option> 
                                <option id="gold-3" value="3" data-instalment="6" data-priceinst="36.65" data-price="219,90" data-period="9">9 meses</option> 
                                <option id="gold-4" value="4" data-instalment="6" data-priceinst="39.98" data-price="239,90" data-period="12">12 meses</option> 
                            </select> 
                            <button type="button" id="button_gold" class="btn-rounded btn-plano-gold" onClick="goToPlan('gold', 'Página: Planos / Botão: Comece já (Gold)')">Comece já</button>
          </div>
          </div>
        </section>
        <section class="row comparison">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  
  <div class="comparison-plan"> <h3>15 Dias Free</h3>
  <p>Está em dúvidas sobre qual plano escolher? Teste o site gratuitamente por 15 dias, com todos os recursos liberados (exceto Loja Virtual). Confira a lista de todos os recursos abaixo.</p> </div> </div> <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <div class="comparison-plan"> <h3>Plano Básico</h3>
  <p>O Plano Básico é indicado para os casais que desejam um site mais simples, contendo os recursos essenciais para divulgar o momento mais lindo de suas vidas.</p>
  </div> </div> <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  
  <div class="comparison-plan">
  <h3>Plano Clássico</h3>
  <p>O Plano Clássico contém todos os recursos do Plano Básico, e adiciona outros que deixam seu site de casamento ainda mais sofisticado e elegante!</p>
  </div> </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="comparison-plan">
  <h3>Plano Gold</h3>
  <p>O Plano Gold contém o pacote completo com todos os recursos do site, para que os casais possam divulgar seu casamento com toda a comodidade e vantagens que o Amar Casar oferece.
  </p>
  </div>
  </div>
  </section>
  <table class="table plans-table">
    <thead>
      <tr>
        <th class="table-title">Compare as funcionalidades</th> <th>Básico</th> <th>Clássico</th> <th>Gold</th> </tr>
    </thead>
    <tbody>
    </tr>
  <tr>
    <td data-th="Compare os planos"> <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Exclusividade Amar Casar">
      <strong>Introdução Animada</strong>
      <span>Coloque um slideshow para aparecer no início do seu site</span> </div> </td> <td data-th="basico">&nbsp;</td> <td data-th="classico">&nbsp;</td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr> 
  
  <td data-th="Compare os planos"> <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Exclusividade Amar Casar"> <strong>Música de fundo</strong> <span>Playlist do Casal</span> </div> </td> <td data-th="basico">&nbsp;</td> <td class="plan_span_center" data-th="classico"><span  style="color: #dd716f;">3 músicas</span></td> <td class="plan_span_center" data-th="gold"><span  style="color: #dd716f;">10 músicas</span></td> </tr> 
	
  <tr>
  <td data-th="Compare os planos"> <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Exclusividade Amar Casar"> <strong>Álbum de fotos</strong> <span>A história do Casal em imagens</span> </div> </td> <td class="plan_span_center" data-th="basico"><span  style="color: #dd716f;">90 MB</span></td> <td class="plan_span_center" data-th="classico"><span  style="color: #dd716f;">150 MB</span></td> <td class="plan_span_center" data-th="gold"><span  style="color: #dd716f;">Ilimitado</span></td> </tr> <tr>
  
  <td data-th="Compare os planos"> <div data-toggle="tooltip" data-placement="top" title="" data-original-title="Exclusividade Amar Casar"> <strong>Saques gratuitos</strong> <span>Não pague nada para transferir seu dinheiro para sua conta</span> </div> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> 
  
  	<tr>
	<td data-th="Compare os planos"><div data-toggle="tooltip" data-placement="top" title="" data-original-title="Exclusividade Amar Casar"> <strong>Domínio Personalizado</strong> <span>Personalize o endereço com que os convidados acessarão seu site</span></div></td>
	<td class="plan_span_center" data-th="basico"><span  style="color: #dd716f;">R$ 59,90</span></td>
	<td class="plan_span_center" data-th="classico"><span  style="color: #dd716f;">R$ 59,90</span></td>
	<td data-th="gold"><span style="color: #dd716f;"><i class="material-icons">check_circle</i></span></td>
	</tr>
	
  <tr>
  <td data-th="Compare os planos"> <strong>Páginas</strong> <span>Personalize os títulos e conteúdos das suas páginas</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
  
  <td data-th="Compare os planos"><strong>Confirmação de presença </strong><span>Receba sua lista de convidados de forma ágil</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
  
  <td data-th="Compare os planos"> <strong>Suporte por chat</strong> <span>Chat ao vivo para te ajudar e tirar suas dúvidas</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
  
  <td data-th="Compare os planos"> <strong>Layouts</strong> <span>Layouts modernos para você encantar seus convidados</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>

  <td data-th="Compare os planos"> <strong>Lista de presentes</strong> <span>Crie sua Loja Virtual com presentes personalizados</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Lista em lojas físicas</strong> <span>Divulgue as lojas em que você criou suas listas</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Mapas com rotas</strong> <span>Ajude seus convidados a encontrar os eventos do seu casamento</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Contagem regressiva</strong> <span>Rumo ao grande dia!</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Contador de acessos</strong> <span>Saiba o número de visitas do seu site</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Habilitar/Desabilitar páginas</strong> <span>Escolha quais páginas aparecem em seu site</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Fontes personalizadas</strong> <span>Estilize as fontes do seu site</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Estatísticas</strong> <span>Verifique o resumo dos presentes, visitas e mensagens recebidos</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Notificações em tempo real</strong> <span>Fique por dentro de tudo o que acontece em seu site</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Sobre o casal</strong> <span>Conte a história do casal para seus convidados</span> </td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td> </tr> <tr>
        
  <td data-th="Compare os planos"> <strong>Mural de Mensagens</strong> <span>Emocione-se com as mensagens dos seus convidados</span></td> <td data-th="basico"><i class="material-icons">check_circle</i></td> <td data-th="classico"><i class="material-icons">check_circle</i></td> <td data-th="gold"><i class="material-icons">check_circle</i></td>

      <tr>
        <td data-th="Compare os planos"><div data-toggle="tooltip" data-placement="top" title="" data-original-title="Exclusividade Amar Casar"> <strong>Padrinhos e Madrinhas</strong> <span>Homenageie estas pessoas tão especiais para você</span></div></td>
        <td data-th="basico"><i class="material-icons">check_circle</i></td>
        <td data-th="classico"><i class="material-icons">check_circle</i></td>
        <td data-th="gold"><i class="material-icons">check_circle</i></td>
        </tr>
      <tr>
        <td data-th="Compare os planos"><div data-toggle="tooltip" data-placement="top" title="" data-original-title="Exclusividade Amar Casar"> <strong>Eventos</strong> <span>Divulgue os detalhes de cada evento do seu casamento</span></div></td>
        <td data-th="basico"><i class="material-icons">check_circle</i></td>
        <td data-th="classico"><span style="color: #dd716f;"><i class="material-icons">check_circle</i></span></td>
        <td data-th="gold"><span style="color: #dd716f;"><i class="material-icons">check_circle</i></span></td>
        </tr>
		
	  </tbody>
	  </table>
	  
	</div>
	</div>
	</div>
</div>
</div>
</section>