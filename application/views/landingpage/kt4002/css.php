<style id="lp-css-ladi"> .closePop,
.widget-element[lp-type=contact_form].bold-label label {
    font-weight: 700
}

*,
a,
abbr,
acronym,
address,
applet,
article,
aside,
audio,
b,
big,
blockquote,
body,
canvas,
caption,
center,
cite,
code,
dd,
del,
details,
dfn,
div,
dl,
dt,
em,
embed,
fieldset,
figcaption,
figure,
footer,
form,
h1,
h2,
h3,
h4,
h5,
h6,
header,
hgroup,
html,
i,
img,
ins,
kbd,
label,
legend,
li,
mark,
menu,
nav,
object,
ol,
output,
p,
pre,
q,
ruby,
s,
samp,
section,
small,
span,
strike,
strong,
sub,
summary,
sup,
table,
tbody,
td,
tfoot,
th,
thead,
time,
tr,
tt,
u,
ul,
var,
video {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: 0 0;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
    display: block
}

ol,
ul {
    list-style: none
}

blockquote,
q {
    quotes: none
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

a {
    cursor: pointer;
    text-decoration: none
}

body {
    font-size: 13px;
    line-height: 18px;
    background: #fafafa;
    color: #000
}

.widget-element {
    position: absolute;
    z-index: 1
}

.widget-element .widget-content {
    width: 100%;
    height: 100%;
    overflow-wrap: break-word;
    word-wrap: break-word;
    display: inline-block;
    letter-spacing: 0
}

.widget-element i.widget-content {
    font-style: normal
}

.widget-element[lp-type=item_menu] .widget-content:first-child {
    display: table-cell;
    vertical-align: middle;
    text-align: center
}

.widget-element[lp-type=textinline] .widget-content {
    width: 100%;
    height: 100%;
    min-height: 35px;
    background: 0 0!important
}

.widget-element[lp-type=textparagraph] .widget-content {
    width: 100%;
    height: 100%;
    min-height: 10px;
    background: 0 0!important
}

.widget-element[lp-type=slider] {
    overflow: hidden
}

.widget-element[lp-type=item_slider] {
    top: 0
}

.widget-element[lp-type=group-tmp] {
    border: 1px dashed #00a52e
}

.widget-group .widget-content[lp-type=content-group] {
    width: 100%;
    height: 100%
}

.widget-section {
    width: 100%!important;
    height: 300px;
    margin: 0;
    padding: 0;
    float: left;
    position: relative;
    background: #fafafa
}

.widget-section[lp-popup=true] {
    width: 100%;
    height: 100vh!important;
    background: rgba(0, 0, 0, .5)!important;
    display: block;
    justify-content: center;
    align-items: center;
    z-index: 99999;
    position: fixed!important;
    top: 0!important;
    left: 0!important;
    border: 0!important;
    overflow-x: hidden;
    overflow-y: scroll;
    right: 0;
    bottom: 0;
}

.widget-section[lp-popup=true] .container {
    background: #fff;
    position: relative;
    margin: 0 auto 40px
}

.widget-element[lp-type=button] {
    cursor: pointer;
    border-radius: 0;
    display: table;
    text-align: center;
    font-size: 20px;
    height: 50px;
    width: 100%;
    position: absolute
}

.widget-element[lp-type=button]>.widget-content {
    display: table-cell;
    vertical-align: middle
}

.widget-element[lp-type=shape]>.widget-content {
    background: 0 0
}

.widget-element[lp-type=contact_form] .item {
    width: 100%;
    position: relative
}

.widget-element[lp-type=contact_form] label {
    margin: 8px 0;
    display: block;
    font-weight: 700;
    font-size: 13px
}

.widget-element[lp-type=contact_form] input {
    -webkit-appearance: none;
    -moz-appearance: none
}

.widget-element[lp-type=contact_form] input,
select,
textarea {
    width: 100%;
    color: #666;
    font-size: 13px;
    border: 1px solid #eee;
    padding: 8px 5px;
    font-family: Roboto, sans-serif
}

.popup.ladi-popup-form,
.popup.ladi-popup-form .popup-title {
    font-family: roboto, "Open Sans", sans-serif
}

.widget-element[lp-type=contact_form] button {
    border: 0;
    cursor: pointer;
    background: #3d9be9;
    padding: 10px 15px;
    color: #fff;
    font-size: 17px;
    width: 100%
}

.widget-element[lp-type=contact_form].left-label .item {
    position: relative
}

.widget-element[lp-type=contact_form].left-label label {
    display: inline-block;
    margin-right: 10px;
    position: absolute;
    top: 0;
    max-width: 95px;
    overflow: hidden;
    line-height: 18px;
    height: 22px;
    padding: 4px
}

.widget-element[lp-type=contact_form].left-label input,
.widget-element[lp-type=contact_form].left-label textarea {
    max-width: calc(100% - 120px);
    margin-left: 120px
}

.widget-element[lp-type=contact_form].left-label button {
    float: right;
    display: inline-block;
    width: auto
}

.widget-element[lp-type=contact_form].hide-label label {
    display: none
}

.widget-element[lp-type=contact_form].input-radius input,
.widget-element[lp-type=contact_form].input-radius textarea {
    border-radius: 7px
}

.widget-element[lp-type=menu-header][lp-navigation=true] .menuMobile,
.widget-element[lp-type=menu-header][lp-navigation=true] .menuMobile>div {
    width: 100%;
    height: 100%
}

@media(max-width:959px) {
    .container {
        height: 100%;
        width: 375px;
        margin: 0 auto;
        padding: 0;
        position: relative
    }
    .widget-element[lp-type=menu-header][lp-navigation=true] {
        width: 50px;
        height: 50px
    }
    .widget-element[lp-type=menu-header][lp-navigation=true] .widget-element[lp-type=item_menu] {
        position: static;
        width: 100vw!important
    }
    .widget-element[lp-type=menu-header][lp-navigation=true] .widget-element[lp-type=item_menu] a {
        display: table-cell!important;
        vertical-align: middle
    }
    .widget-element[lp-type=menu-header] .menuMobile div {
        display: none
    }
}

@media(min-width:768px) {
    .container {
        height: 100%;
        width: 960px;
        margin: 0 auto;
        padding: 0;
        position: relative
    }
    .widget-element[lp-type=menu-header] .menuMobile {
        display: none
    }
}

@media(min-width:960px) {
    .container {
        height: 100%;
        width: 960px;
        margin: 0 auto;
        padding: 0;
        position: relative
    }
    .widget-element[lp-type=menu-header] .menuMobile {
        display: none
    }
}

.widget-element[lp-type=menu-header] {
    z-index: 999
}

.widget-element[lp-type=image] {
    width: 150px;
    height: 150px
}

.widget-element[lp-type=image] img {
    width: 100%;
    height: 100%;
    object-fit: cover
}

.widget-element[lp-type=slide_show] .widget-content {
    position: relative;
    margin: 0 auto 60px;
    padding: 0;
    width: 100%;
    height: 100%
}

.widget-element[lp-type=slide_show] .item_slide {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    float: left
}

.widget-element[lp-type=slide_show] .item_slide li {
    width: 100%;
    height: 100%;
    float: left;
    display: none;
    position: absolute
}

.widget-element[lp-type=slide_show] .item_slide li:first-child {
    display: block
}

.widget-element[lp-type=slide_show] .item_slide .desc {
    position: absolute;
    left: 0;
    bottom: 0;
    background: rgba(80, 80, 80, .75);
    width: 100%;
    height: 50px;
    overflow: hidden;
    overflow-y: scroll;
    padding: 5px 10px;
    color: #fff;
    display: none
}

.lp-popup-pub,
.widget-element[lp-type=facebook_messages]>.widget-content,
.widget-element[lp-type=image]>.widget-content {
    overflow: hidden
}

.widget-element[lp-type=slide_show] .item_slide .desc span {
    color: #FFF;
    display: block;
    font-size: .85em;
    padding: 10px
}

.widget-element[lp-type=slide_show] .item_slide li .main-slide {
    width: 100%;
    max-width: 960px;
    height: 100%;
    margin: 0 auto;
    position: relative
}

.widget-element[lp-type=slide_show] .item_slide li img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute
}

.widget-element[lp-type=slide_show] .control_slide i,
.widget-element[lp-type=slide_show] .control_slide svg {
    font-size: 32px;
    line-height: 32px;
    width: 32px;
    height: 32px
}

.widget-element[lp-type=slide_show] .control_slide .control_left,
.widget-element[lp-type=slide_show] .control_slide .control_right {
    width: 32px;
    height: 32px;
    position: absolute;
    top: 50%;
    margin-top: -16px;
    outline: 0;
    z-index: 9999;
    color: #eee;
    background: rgba(0, 0, 0, .2);
    border-radius: 50%;
    text-align: center;
    cursor: pointer
}

.widget-element[lp-type=slide_show] .control_slide .control_left {
    left: 10px
}

.widget-element[lp-type=slide_show] .control_slide .control_right {
    right: 10px
}

.widget-element[lp-type=slide_show] .control_slide .control_left:hover,
.widget-element[lp-type=slide_show] .control_slide .control_right:hover {
    background: rgba(0, 0, 0, .4)
}

.widget-element[lp-type=slide_show] .pager {
    position: absolute;
    bottom: -30px;
    width: 100%;
    text-align: center;
    display: none
}

.widget-element[lp-type=slide_show] .pager .pager-item {
    display: inline-block
}

.widget-element[lp-type=slide_show] .pager a {
    text-indent: -9999px;
    display: block;
    width: 10px;
    height: 10px;
    margin: 0 5px;
    outline: 0;
    border-radius: 5px;
    background: #666
}

.widget-element[lp-type=slide_show] .pager a.active,
.widget-element[lp-type=slide_show] .pager a:hover {
    background: #000
}

.widget-element[lp-type=slide_show].pager-white .pager a {
    background: #fff
}

.widget-element[lp-type=slide_show].pager-white .pager a.active,
.widget-element[lp-type=slide_show].pager-white .pager a:hover {
    background: #eee
}

.widget-element[lp-type=slide_show].hide-caption .desc,
.widget-element[lp-type=slide_show].hide-direction .control_slide,
.widget-element[lp-type=slide_show].hide-pager .pager {
    display: none
}

.widget-element[lp-type=slide_show].no-border .widget-content {
    box-shadow: none;
    border: 0
}

.screen-overlay {
    background: rgba(0, 0, 0, .8);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 150!important;
    display: block
}

span.formHintBubble:after {
    height: 0;
    width: 0;
    position: absolute;
    margin-left: -15px;
    bottom: 0;
    z-index: 9;
    border-color: transparent transparent #323232;
    border-style: solid;
    border-width: 15px;
    content: " ";
    margin-bottom: 27px;
    left: 25px
}

div[lp-type=countdown] .widget-content>div {
    width: 25%;
    height: 100%;
    float: left;
    display: table
}

div[lp-type=countdown] .widget-content>div>span {
    display: table-cell;
    vertical-align: middle;
    text-align: center
}

div[lp-type=linevertical] .widget-content .linevertical {
    height: 100%
}

div[lp-type=line] .widget-content .line {
    width: 100%;
    height: 1px
}

.important,
.important .widget-content {
    width: 100%!important;
    height: 100%!important
}

.important {
    top: 0!important;
    left: 0!important;
}

.lp-overlay-popup,
.lp-popup-pub {
    width: 100%;
    height: 100%;
    position: fixed;
    left: 0;
    top: 0
}

.lp-popup-pub {
    z-index: 999999999;
    overflow-y: scroll
}

.lp-overlay-popup {
    z-index: 99999999;
    background: rgba(0, 0, 0, .5)
}

.lp-popup-pub .container {
    background: #fff
}

.lp-popup-pub .widget-section {
    margin: 50px auto;
    background: rgba(0, 0, 0, 0)!important;
    background-image: url()!important
}

.closePop {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQwMzBEODQ2NkVCMjExRTdBREFEQTM5NDRBRTAwNDkwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQwMzBEODQ3NkVCMjExRTdBREFEQTM5NDRBRTAwNDkwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDAwQUIzRTA2RUIyMTFFN0FEQURBMzk0NEFFMDA0OTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDAzMEQ4NDU2RUIyMTFFN0FEQURBMzk0NEFFMDA0OTAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6EnkxkAAABbklEQVR42mIUEhJl4uHmZP70+RMnHy/fdwYSAEzPl6/f/4INYefkljp/4VJzdkG5PLEGeHj5GoH0gNhgQQEBAb77Dx5N/A8Ev3//vtPZO1VFTlaOFRcGqU9LzzYHqQXpAekFiTOACJBmmATMMJAGQoaA6H0HT8jBDSLGMHyGoBiEzTCQRpAB2AxBDwIGdKdjMywgONwTnyEgzAg2DS1GwsKjNadOmbCUhYVF+c+fP3dB4jB236RZHlMndD5Ej0lmfn5+ZmQBdnb2P+fOnfnw8NGzQ54ebo4gA5iYmIRghrQ3V78CqUE3iImUBHj31jVhXHIYLsLmtX///r0HsUEuBLkU5GIMVxFKJ6CAxSaGns4YCBlCUvQToxBb0kBWAzaIkCHEGIaRaZGTPS6MbBgs0zKLiYr9mzRpwuGIyGjui1duZSTEhD0nlAxOnzj68S8j5xZpKQkGe1ubElB5xAgq2ECSoHKJgQwAMgREAwQYAMyAsyyW5hiCAAAAAElFTkSuQmCC);
    cursor: pointer;
    top: 10px!important;
    right: 10px!important;
    position: fixed;
    z-index: 99999998;
    width: 18px;
    height: 18px;
    color: transparent
}

.widget-element[lp-type=menu-header] .widget-content li[lp-item-show=hide] {
    display: none
}

.popup.ladi-popup-form {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    background-color: rgba(0, 0, 0, .5)
}

.popup.ladi-popup-form .popup-header {
    position: relative;
    background: #009FE3;
    padding: 15px 20px
}

.popup.ladi-popup-form .popup-dialog {
    border-radius: 8px!important;
    width: 600px;
    min-height: 200px;
    min-width: 600px;
    max-width: 1400px;
    overflow: hidden;
    position: absolute;
    top: 25%;
    left: 0;
    right: 0;
    margin: 0 auto;
    background: #fff
}

.popup.ladi-popup-form .popup-title {
    margin: 0;
    color: #fff
}

.popup.ladi-popup-form button {
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 20px;
    color: #fff;
    background: 0 0;
    border: 0;
    font-size: 25px
}

.popup.ladi-popup-form .popup-content {
    padding: 30px 20px;
    color: rgba(6, 21, 40, .8);
    text-align: center
}

.popup.ladi-popup-form .popup-content p,
h1,
h2,
h3,
h4,
h5,
h6 {
    padding: 0;
    margin: 0;
    font-size: 20px
}

@media(max-width:767px) {
    .popup.ladi-popup-form .popup-dialog {
        width: 300px;
        min-width: 300px
    }
}

.control-slider-left,
.control-slider-right {
    position: absolute;
    z-index: 9999;
    top: calc(50% - 15px);
    width: 19px;
    height: 39px;
    cursor: pointer
}

.control-slider-left {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAnCAYAAADtu3N3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA25pVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpCNjlCRUVFNTZFQjAxMUU3ODYyN0ZDRTE3QzAxQzA4MCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpERDkwOUM5QzZFQjAxMUU3QTg4MTlERTQ3M0Q1OUQzMyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpERDkwOUM5QjZFQjAxMUU3QTg4MTlERTQ3M0Q1OUQzMyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoV2luZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpkZDBlM2QwZC1mMWUxLWQ4NGYtOGMwZi0zY2NjNjQzZTY1NGIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjY5QkVFRTU2RUIwMTFFNzg2MjdGQ0UxN0MwMUMwODAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz51tYnBAAADDUlEQVR42mL8//8/g29WEQMp4NjKJUz//v3mcXB2t169YslkFhYW5R8/f3UzMZABQAYxMjLrTJ82tQlkEFDoUGhhRRnJhl3aspZVVExScNGylckSYsImf4Hg6fPXqSA5JlK9x87JLRUWFurh7e6UCBJ7/uJVTEZz+y2SDQN5783rV9IN9bWljEAACqfM1u4VMHmiDTuyfD4fKJzOnT9fCQqnP3/+3N2062Q9shomUsJpweLlfgrysj6gcHr5+r3X4u3rv5NkGCicPn3+xKmtq6fl7eFUAhJjZmbOhIUTSYbBksHsmTP6gIYwf/7ydT0wXc7GppaJGO9t2rKjRkRYQAMUTp8/f0/CpZ4Fn0GgZJCTVxxhY2XiCcwp/1+/eRud3tz5AZceJkLhlJUeD06QT5+/qk9r6jyJzydMxGaXzJbOZkLhy4QrnFZu2hGJnl1IMgw5u7hYG2ejZxeSDAN5DxROuLIL0YbBskt/b3cWruxClGHEZheiDCM2uxBlGB8v3/eD+/Z8fP32w3moeAw5JTDYsC9fv//9///vlcys7DqQF4FCdtNrymvJMswqPOYfyHVXL1+6NnXGgmqQmLSkWOOsunJzkg0DAT2f4N8/v399NmVS74ojx85sByUNURHhpTNrqwRINgxm4OtXz9/7+Xi0vHn74QYoifDycs4jyzCwABPrFxFRsaep6RlFoPDj5eEO3DytL5Usw0DhB/IuKPy27tjXAxIDmjl9Rm2lGsmGIXs3ITZy04OHj7eASlhxUcFtsZ6BnCQbBgI2kYmfQMmlsLh0GihrgcLPz828kSzDYOEH8m5DY3M3qKTlYGcrnV5dGkGWYbDwW7Vq9Y6tO/fNB4lJSogtwRV+BGsnWPjFRYXPffHq7RlQ+ElLis4myzCYd2HZDRR+oOy2ur+jiyzDkLPbtJkLwa4Chd+06lJ3kg3Dlt3A4ScuOhU5u5HUCiKU3Uhu7MHCD1t2I9kw5PCDZTdgEpwJSi5ktWlh4QfLbqDiSliIP4Usw2AGgrzr5uae8+Tp80hQAxkgwAD+Y9slwtqyIgAAAABJRU5ErkJggg==);
    left: 30px
}

.control-slider-left svg,
.control-slider-right svg {
    margin-top: 2px;
    display: none
}

#SHAPE176>.widget-content svg,
#SHAPE181>.widget-content svg,
#SHAPE186>.widget-content svg,
#SHAPE534>.widget-content svg,
#SHAPE535>.widget-content svg,
#SHAPE566>.widget-content svg,
#SHAPE567>.widget-content svg,
#SHAPE568>.widget-content svg,
#SHAPE569>.widget-content svg,
#SHAPE570>.widget-content svg,
#SHAPE571>.widget-content svg,
#SHAPE683>.widget-content svg,
#SHAPE686>.widget-content svg,
#SHAPE691>.widget-content svg,
#SHAPE743>.widget-content svg,
#SHAPE758>.widget-content svg,
#SHAPE761>.widget-content svg,
#SHAPE766>.widget-content svg {
}

.control-slider-right {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAnCAYAAADtu3N3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjdGODg0MDRBNkVBRTExRTdCRjRCQjY2Qzc4RDQ5NjJFIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjdGODg0MDRCNkVBRTExRTdCRjRCQjY2Qzc4RDQ5NjJFIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N0Y1MTAyNzA2RUFFMTFFN0JGNEJCNjZDNzhENDk2MkUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6N0Y1MTAyNzE2RUFFMTFFN0JGNEJCNjZDNzhENDk2MkUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5AB837AAADFklEQVR42mL8//8/w4+fv7o42NlK//z5czc0Iib3wN6dR5mYWL9Yhcf8YyABMIGI0MKKMiB1iIWFRXn6tKlNjIzMOv/+/eZhIBEwwRhPn79O/QsEEmLCJouWrUwWFZMUvLRlLStZhmU0t996/uJVDIjt7e6UGBYW6sHOyS11bOUSJpINA4HM1u4VwPDrZgSChvra0jevX0mT4l0MWzftOlkPighQ+J07f74SFH5Hls/nI8uwxdvXf3/5+r0XKPwU5GV9Fixe7kds+GEND1D4MTMzZ4LDz8OpRFtXT+vT50+chMIPp6RvVtHsz1++rgcayjx75ow+YpILXps+f/6eBAo/EWEBjU1bdtQQ8i5ew9Kb2z68fvM2GphL/ttYmXjm5BVHgJILLgMJpqG0ps6TT5+/qgexs9LjU/GFH1EJMrOls5mY7EZ06kbObis37YjEFn5EG4ac3VysjbOxZTcmUjIyenYDhR+yd5lILWaQs1t/b3cWcnYj2TB82Y1kw/BlN7IMgwJwZLx+++H8wX17PvLx8n0ny7DpNeW1QMoO5NXMrOy6////Xvny9ftfkg2bVVduLi0p1ghiT52xoPrq5UvXQK4CVT4spBg0s7ZKQFREYCkoaRw5dmb7lEm9K35+//pMzyf4N0ieJMN4eTnngZLEm7cfbvj5eLQAvffeJjLxN8npbPO0vlReHu5AUDilpmcUiYiKPQXVrSRnpxm1lWpAM6aD2Ft37OsBhRPIe+iVNEFvxnoGcoqLCm4DlbgPHj7ekhAbuQnde0S7zM/NvBEUTqAsVFhcOg2UDIAGfSK5cJxeXRoBaoOAStqGxuZukPfQw4kob4LCSUJMaAk4nHbum79q1eod2MKJKMOkJUVnAynmF6/enomLCp+LK5wIenN1f0cXKLuAwgmWXfB5D6fLplWXuoPCCcyeuXA2LLsAU/k/kgwDZRcxUYGpIDa27EKSYYSyC9GGgbILkIJnF2LDCcMwUDIAJqWZwMIAnl2IDSeM2BQW4k8BFSuw7EJKOGFtID95+jzSzc09B+Q9cgwCAYAAAwDRmt4KYtvcrgAAAABJRU5ErkJggg==);
    right: 30px
}

.widget-element[lp-type=listop] ol.widget-content {
    counter-reset: linum;
    list-style: none;
    padding: 0
}

.widget-element[lp-type=listop] ol.widget-content>li:last-child {
    margin-bottom: 0!important
}

.widget-element[lp-type=listop] ol.widget-content>li {
    counter-increment: linum;
    word-wrap: break-word
}

.widget-element[lp-type=listop] ol.widget-content>li::before {
    float: left;
    clear: left;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    position: relative;
    left: 0;
    top: 0;
    padding: 0!important
}

.widget-element[lp-type=image]>.widget-content {
    overflow: hidden
}

.widget-element[lp-type=videoyoutube] .widget-content {
    position: absolute;
    top: 0;
    left: 0;
    vertical-align: middle
}

.widget-element[lp-type=videoyoutube] .widget-content embed {
    position: absolute;
    top: 0;
    left: 0
}

.widget-element[lp-type=facebook_messages] .lp-close-fb-mes {
    position: absolute;
    z-index: 99999;
    top: 0;
    right: 0;
    width: 30px;
    height: 30px;
    background: #29487d;
    cursor: pointer;
    text-align: center;
    padding: 5px;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    line-height: 20px
}

.widget-element[lp-type=facebook_messages] .lp-open-fb-mes svg {
    width: 30px;
    height: 30px;
    float: left;
    margin-right: 10px
}

.widget-element[lp-type=facebook_messages] .lp-open-fb-mes {
    display: none;
    cursor: pointer;
    font-size: 16px;
    z-index: 99999;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 45px;
    padding: 5px 10px;
    color: #fff;
    background: #29487d;
    line-height: 30px
}

.widget-element[lp-type=facebook_comment] .widget-content:first-child {
    overflow: auto;
    -webkit-overflow-scrolling: touch
}

body {
    font-family: Roboto, "Open Sans", sans-serif
}

;
.widget-element input,
.widget-element textarea,
body input,
body textarea {
    font-family: Roboto, sans-serif!important
}

;
input::-webkit-input-placeholder {
    font-family: Roboto, sans-serif
}

input:-moz-placeholder {
    font-family: Roboto, sans-serif
}

input::-moz-placeholder {
    font-family: Roboto, sans-serif
}

input::-ms-input-placeholder {
    font-family: Roboto, sans-serif
}

textarea::-webkit-input-placeholder {
    font-family: Roboto, sans-serif
}

textarea:-moz-placeholder {
    font-family: Roboto, sans-serif
}

textarea::-moz-placeholder {
    font-family: Roboto, sans-serif
}

textarea::-ms-input-placeholder {
    font-family: Roboto, sans-serif
}

.fb-comments iframe {
}

.widget-element[lp-type=item_form] .widget-content {
    font-family: Roboto, sans-serif
}

@media(max-width:767px) {
    .container {
        width: 375px;
        margin: 0 auto
    }
    .widget-element[lp-type=slider] .widget-element[lp-type=item_slider] {
        display: none
    }
    .widget-element[lp-type=slider] .widget-element[lp-type=item_slider]:nth-child(3) {
        display: block
    }
    .widget-element[lp-type=item_slider] {
        top: 0!important;
        left: auto!important;
        position: relative!important;
        float: left!important;
        display: inline-block!important
    }
}

@media(max-width:375px) {
    .container {
        width: 375px;
        margin: 0 auto
    }
}

.formHintBubble {
    opacity: .9;
    right: 0;
    bottom: -35px;
    z-index: 999;
    padding: 0 5px;
    border-radius: 10px;
    height: 35px;
    position: absolute;
    background: #323232;
    color: #fff;
    text-align: center;
    line-height: 35px
}

#POPUP656 .container,
#SECTION2,
#SECTION502,
#SECTION527 {
    background-origin: content-box;
    background-attachment: scroll
}

#SECTION341,
#SECTION94 {
    background-attachment: fixed
}

#SECTION2,
#SECTION341,
#SECTION502,
#SECTION527,
#SECTION94 {
    background-size: cover;
    background-repeat: no-repeat
}

.hide-background-image,
.hide-background-image .container:first-child,
.hide-background-image .widget-content:first-child,
.hide-background-image .widget-content:first-child>.lp-show-image {
    background-image: none!important
}

.iframeTks {
    display: none!important
}

.widget-element[lp-type=slider] .wrap-child {
    position: absolute;
    top: 0;
    width: 20000%;
    height: 100%;
    left: 0
}

.wrap-child .widget-item-child[lp-type=item_slider] {
    position: relative!important;
    left: auto!important;
    display: inline-block!important
}

.ladi-widget-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.widget-element[lp-type=customhtml] .ladi-widget-overlay,
.widget-element[lp-type=facebook_messages] .ladi-widget-overlay,
.widget-element[lp-type=googlemap] .ladi-widget-overlay,
.widget-element[lp-type=videoyoutube] .ladi-widget-overlay {
    display: none!important
}

@media(max-width:860px) and (min-width:767px) {
    .ladi-wraper-page {
        display: inline
    }
}

body {
    width: 100vw;
    margin: 0 auto;
    overflow-x: hidden
}

#LINEVERTICAL516>.widget-content .linevertical,
#LINEVERTICAL517>.widget-content .linevertical,
#LINEVERTICAL518>.widget-content .linevertical,
#LINEVERTICAL520>.widget-content .linevertical {
    border-color: rgba(0, 229, 255, 1);
    margin-left: 12px;
    border-width: 0 0 0 1px;
    border-style: solid
}

.ladi-wraper-page {
    width: 100%;
    height: 100%;
    overflow: hidden
}

.widget-element[lp-type=facebook_comment] .lp-strikeThrough {
    text-decoration: line-through;
    -webkit-text-decoration: line-through;
    -moz-text-decoration: line-through
}

.lp-underline {
    text-decoration: underline;
    -webkit-text-decoration: underline;
    -moz-text-decoration: underline
}

.widget-section[lp-popup=true] {
    -webkit-overflow-scrolling: touch
}

.widget-section[lp-popup=true]::-webkit-scrollbar {
    width: 0;
    background-color: rgba(0, 0, 0, 0);
    -webkit-border-radius: 100px
}

.widget-section[lp-popup=true]::-ms-scrollbar {
    width: 0;
    background-color: rgba(0, 0, 0, 0);
    -webkit-border-radius: 100px
}

.widget-section[lp-popup=true]::-moz-scrollbar {
    width: 0;
    background-color: rgba(0, 0, 0, 0);
    -webkit-border-radius: 100px
}

.hide-background-image .widget-content:first-child>img {
    display: none;
    visibility: hidden
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTf8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTT0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v13/59ZRklaO5bWGqF5A9baEERJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v13/u-WUoqrET9fUeobQW7jkRRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzP8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzD0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
}

@font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v15/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v15/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/roboto/v15/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJafJul7RR1X4poJgi27uS4w.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJavyPXdneeGd26m9EmFSSWg.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJUo2lTMeWA_kmIyWrkNCwPc.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/y7lebkjgREBJK96VQi37Zr6up8jxqWt8HVA3mDhkV_0.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/y7lebkjgREBJK96VQi37ZiYE0-AqJ3nfInTTiDXDjU4.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/y7lebkjgREBJK96VQi37Zo4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJWhQUTDJGru-0vvUpABgH8I.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJejkDdvhIIFj_YMdgqpnSB0.woff2) format('woff2');
}

@font-face {
    font-family: 'Roboto Slab';
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJYlIZu-HDpmDIZMigmsroc4.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE_oTkEokFSrSpvYSpZOeZRs.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE0_0lycXMw8PhobHtu2Qgco.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 300;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE8u2Q0OS-KeTAWjgkS85mDg.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/SKK6Nusyv8QPNMtI4j9J2yEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/gFXtEMCp1m_YzxsBpKl68iEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fcjh33M2A-6X0bdu871ruAGs.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fchHJTnCUrjaAm2S9z52xC3Y.woff2) format('woff2');
}

@font-face {
    font-family: Montserrat;
    font-style: normal;
    font-weight: 700;
    src: url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2) format('woff2');
}

@font-face {
    font-family: Athiti;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/athiti/v1/cE0EpAzSj2z7Ci1CuJ9ScfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
}

@font-face {
    font-family: Athiti;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/athiti/v1/fzjiCwJnuAIRRk4chJuDO_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
}

@font-face {
    font-family: Athiti;
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/athiti/v1/Qu8ThwHksrdlln0AKZNung.woff2) format('woff2');
}

@media(min-width:768px) {
    #SECTION9 {
        width: 100%;
        height: 75px
    }
    #SECTION2,
    #SECTION507,
    #SECTION527 {
        width: 100%;
        height: 406px
    }
    #SECTION502 {
        width: 100%;
        height: 405px
    }
    #SECTION472 {
        width: 100%;
        height: 344.96px
    }
    #SECTION678,
    #SECTION735,
    #SECTION754 {
        width: 100%;
        height: 848px
    }
    #SECTION42 {
        width: 100%;
        height: 424.5px
    }
    #SECTION547 {
        width: 100%;
        height: 611px
    }
    #POPUP212 {
        width: 100%;
        height: 100%
    }
    #POPUP212 .container {
        width: 447.97px;
        height: 295.04px;
        top: calc(100%-295.04px)
    }
    #SECTION94 {
        width: 100%;
        height: 982px
    }
    #SECTION171 {
        width: 100%;
        height: 294px
    }
    #SECTION341 {
        width: 100%;
        height: 673px
    }
    #POPUP656 {
        width: 100%;
        height: 100%
    }
    #POPUP656 .container {
        width: 662px;
        height: 607px;
        top: calc(100%-607px)
    }
    #POPUP368 {
        width: 100%;
        height: 100%
    }
    #POPUP368 .container {
        width: 780px;
        height: 423px;
        top: calc(100%-423px)
    }
    #IMAGE187 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/logo-lakita-w-1506397011966.png)
    }
    #BUTTON753,
    #BUTTON770 {
        top: 777.05px;
        width: 159px;
        left: 400px
    }
    #HEADLINE685,
    #HEADLINE742,
    #HEADLINE760 {
        top: 258.89px;
        left: 13px;
        width: 288px
    }
    #HEADLINE693,
    #HEADLINE750,
    #HEADLINE767 {
        top: 236.88px;
        width: 285px;
        left: 10.98px
    }
    #HEADLINE5,
    #HEADLINE510 {
        height: 61px;
        width: 755px
    }
    #HEADLINE736,
    #HEADLINE755 {
        top: 89.58px;
        left: 171.69px;
        width: 617.27px;
        height: 33.64px
    }
    #PARAGRAPH737,
    #PARAGRAPH756 {
        top: 143.58px;
        left: 128.69px;
        width: 700px;
        height: 20px
    }
    #GROUP773,
    #GROUP775 {
        height: 498.92px;
        top: 250.63px;
        left: 330.06px
    }
    #PARAGRAPH752,
    #PARAGRAPH769 {
        height: 190px;
        top: 308.92px;
        left: 0
    }
    #GROUP713,
    #GROUP774 {
        height: 365.94px;
        top: 251.55px
    }
    #GROUP715,
    #GROUP776 {
        height: 346.94px;
        width: 301px
    }
    #BOX684,
    #BOX687,
    #BOX692,
    #BOX741,
    #BOX759,
    #BOX762,
    #BOX772 {
        width: 164px;
        height: 164px
    }
    #SHAPE683,
    #SHAPE686,
    #SHAPE691,
    #SHAPE743,
    #SHAPE758,
    #SHAPE761,
    #SHAPE766 {
        width: 35px;
        height: 35px
    }
    #HEADLINE43,
    #HEADLINE504,
    #HEADLINE509 {
        height: 36px;
        padding: 0
    }
    #IMAGE187 {
        top: 19px;
        left: 9px;
        width: 150.53px;
        height: 45px
    }
    #HEADLINE513 {
        top: 46px;
        left: 241px;
        padding: 0;
        width: 180px;
        height: 18px
    }
    #HEADLINE513>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #HEADLINE514 {
        top: 46px;
        left: 393px;
        padding: 0;
        width: 158px;
        height: 18px
    }
    #HEADLINE514>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #HEADLINE515 {
        top: 46px;
        left: 556px;
        padding: 0;
        width: 200px;
        height: 18px
    }
    #HEADLINE515>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #LINEVERTICAL516 {
        top: 46px;
        left: 373px;
        width: 25px;
        height: 17px
    }
    #LINEVERTICAL517 {
        top: 46px;
        left: 536px;
        width: 25px;
        height: 18px
    }
    #LINEVERTICAL518 {
        top: 46px;
        left: 616px;
        width: 25px;
        height: 18px
    }
    #HEADLINE519 {
        top: 46px;
        left: 634px;
        padding: 0;
        width: 134px;
        height: 18px
    }
    #HEADLINE519>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #LINEVERTICAL520 {
        top: 46px;
        left: 753px;
        width: 25px;
        height: 18px
    }
    #HEADLINE524 {
        top: 46px;
        left: 772px;
        padding: 0;
        width: 200px;
        height: 18px
    }
    #HEADLINE524>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #PARAGRAPH4 {
        top: 186px;
        left: 0;
        padding: 0;
        width: 434px;
        height: 27px
    }
    #PARAGRAPH4>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #HEADLINE7 {
        top: 190px;
        left: 0;
        padding: 0;
        width: 679px;
        height: 72px
    }
    #HEADLINE7>.widget-content {
        font-size: 30px;
        text-align: left
    }
    #HEADLINE5 {
        top: 116px;
        left: 0;
        padding: 0
    }
    #HEADLINE5>.widget-content {
        font-size: 50px;
        text-align: left
    }
    #BUTTON454 {
        top: 252px;
        left: 213px;
        padding: 0;
        width: 160px;
        height: 40px
    }
    #BUTTON454>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE509 {
        top: 92px;
        left: 265px;
        width: 679px
    }
    #HEADLINE509>.widget-content {
        font-size: 30px;
        text-align: left
    }
    #PARAGRAPH508 {
        top: 214px;
        left: 25px;
        padding: 0;
        width: 922px;
        height: 27px
    }
    #PARAGRAPH508>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #LINE526 {
        top: 189px;
        left: 94px;
        width: 733px;
        height: 25px
    }
    #BUTTON511 {
        top: 258px;
        left: 389px;
        padding: 0;
        width: 160px;
        height: 40px
    }
    #BUTTON511>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE510 {
        top: 128px;
        left: 162px;
        padding: 0
    }
    #HEADLINE510>.widget-content {
        font-size: 50px;
        text-align: left
    }
    #HEADLINE504 {
        top: 133px;
        left: 388px;
        width: 679px
    }
    #HEADLINE504>.widget-content {
        font-size: 30px;
        text-align: left
    }
    #HEADLINE505 {
        top: 59px;
        left: 388px;
        padding: 0;
        width: 755px;
        height: 66px
    }
    #HEADLINE505>.widget-content {
        font-size: 60px;
        text-align: left
    }
    #BUTTON506 {
        top: 190px;
        left: 507px;
        padding: 0;
        width: 160px;
        height: 40px
    }
    #BUTTON506>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE525 {
        top: 50px;
        left: 159px;
        padding: 0;
        width: 250px;
        height: 126px
    }
    #HEADLINE525>.widget-content {
        font-size: 120px;
        text-align: left
    }
    #HEADLINE528 {
        top: 155px;
        left: 195px;
        padding: 0;
        width: 679px;
        height: 62px
    }
    #HEADLINE528>.widget-content {
        font-size: 25px;
        text-align: left
    }
    #HEADLINE529 {
        top: 95px;
        left: 189px;
        padding: 0;
        width: 755px;
        height: 45.45px
    }
    #HEADLINE529>.widget-content {
        font-size: 40px;
        text-align: left
    }
    #BUTTON530 {
        top: 244px;
        left: 324px;
        padding: 0;
        width: 160px;
        height: 40px
    }
    #BUTTON530>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE531 {
        top: 73px;
        left: 0;
        padding: 0;
        width: 250px;
        height: 106px
    }
    #HEADLINE531>.widget-content {
        font-size: 100px;
        text-align: left
    }
    #HEADLINE475 {
        top: 87.98px;
        left: 262.91px;
        padding: 0;
        width: 596px;
        height: 34px
    }
    #HEADLINE475>.widget-content {
        font-size: 30px;
        text-align: center
    }
    #HEADLINE476 {
        top: 123.97px;
        left: 401.9px;
        padding: 0;
        width: 398px;
        height: 25.45px
    }
    #HEADLINE476>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #HEADLINE477 {
        top: 195.99px;
        left: 278.91px;
        padding: 0;
        width: 182.73px;
        height: 15.45px
    }
    #HEADLINE477>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #BOX480 {
        top: 86.99px;
        left: 59.91px;
        width: 186.01px;
        height: 186.01px
    }
    #PARAGRAPH633 {
        top: 211.44px;
        left: 308px;
        padding: 0;
        width: 529.01px;
        height: 70.91px
    }
    #PARAGRAPH633>.widget-content {
        font-size: 18px;
        text-align: justify
    }
    #LINE634 {
        top: 170px;
        left: 348px;
        width: 418px;
        height: 25px
    }
    #HEADLINE673 {
        top: 155px;
        left: 348.89px;
        padding: 0;
        width: 475px;
        height: 24px
    }
    #HEADLINE673>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #HEADLINE736 {
        padding: 0
    }
    #HEADLINE736>.widget-content {
        font-size: 30px;
        text-align: center
    }
    #PARAGRAPH737 {
        padding: 0
    }
    #PARAGRAPH737>.widget-content {
        font-size: 16px;
        text-align: center
    }
    #BUTTON753 {
        padding: 0;
        height: 40px
    }
    #BUTTON753>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP773 {
        width: 301px
    }
    #BOX741 {
        top: 0;
        left: 74px
    }
    #HEADLINE742 {
        padding: 0;
        height: 16px
    }
    #HEADLINE742>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE743 {
        top: 187.97px;
        left: 137px
    }
    #HEADLINE750 {
        padding: 0;
        height: 18px
    }
    #HEADLINE750>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #PARAGRAPH752 {
        padding: 0;
        width: 301px
    }
    #PARAGRAPH752>.widget-content {
        font-size: 13px;
        text-align: justify
    }
    #HEADLINE755 {
        padding: 0
    }
    #HEADLINE755>.widget-content {
        font-size: 30px;
        text-align: center
    }
    #PARAGRAPH756 {
        padding: 0
    }
    #PARAGRAPH756>.widget-content {
        font-size: 16px;
        text-align: center
    }
    #BUTTON770 {
        padding: 0;
        height: 40px
    }
    #BUTTON770>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP774 {
        left: .06px;
        width: 301px
    }
    #HEADLINE757 {
        top: 258.88px;
        left: 5px;
        padding: 0;
        width: 297px;
        height: 16px
    }
    #HEADLINE757>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE758 {
        top: 187.5px;
        left: 137.94px
    }
    #PARAGRAPH768 {
        top: 308.94px;
        left: 1px;
        padding: 0;
        width: 301px;
        height: 57px
    }
    #PARAGRAPH768>.widget-content {
        font-size: 13px;
        text-align: justify
    }
    #HEADLINE771 {
        top: 236.89px;
        left: 6px;
        padding: 0;
        width: 292px;
        height: 18px
    }
    #HEADLINE771>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX772 {
        top: 0;
        left: 75px
    }
    #GROUP775 {
        width: 301px
    }
    #BOX759 {
        top: 0;
        left: 74px
    }
    #HEADLINE760 {
        padding: 0;
        height: 16px
    }
    #HEADLINE760>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE761 {
        top: 187.97px;
        left: 137px
    }
    #HEADLINE767 {
        padding: 0;
        height: 18px
    }
    #HEADLINE767>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #PARAGRAPH763>.widget-content,
    #PARAGRAPH769>.widget-content {
        font-size: 13px;
        text-align: justify
    }
    #PARAGRAPH769 {
        padding: 0;
        width: 301px
    }
    #GROUP776 {
        top: 252.98px;
        left: 662.53px
    }
    #BOX762 {
        top: .02px;
        left: 74.02px
    }
    #PARAGRAPH763 {
        top: 308.95px;
        left: .02px;
        padding: 0;
        width: 301px;
        height: 38px
    }
    #HEADLINE764 {
        top: 236.09px;
        left: 3.31px;
        padding: 0;
        width: 295px;
        height: 18px
    }
    #HEADLINE764>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE765 {
        top: 258.92px;
        left: 11px;
        padding: 0;
        width: 290px;
        height: 32px
    }
    #HEADLINE765>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE766 {
        top: 188px;
        left: 137.02px
    }
    #GROUP713 {
        left: 1.06px;
        width: 301px
    }
    #HEADLINE681 {
        top: 236.89px;
        left: 5px;
        padding: 0;
        width: 292px;
        height: 18px
    }
    #HEADLINE681>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE682 {
        top: 258.88px;
        left: 4px;
        padding: 0;
        width: 297px;
        height: 32px
    }
    #HEADLINE682>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE683 {
        top: 187.98px;
        left: 137.02px
    }
    #BOX692 {
        top: 0;
        left: 74px
    }
    #PARAGRAPH694 {
        top: 308.94px;
        left: 0;
        padding: 0;
        width: 301px;
        height: 57px
    }
    #PARAGRAPH694>.widget-content {
        font-size: 13px;
        text-align: justify
    }
    #GROUP714 {
        top: 250.63px;
        left: 330.06px;
        width: 301px;
        height: 365.92px
    }
    #BOX684 {
        top: 0;
        left: 74px
    }
    #HEADLINE685 {
        padding: 0;
        height: 32px
    }
    #HEADLINE685>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE686 {
        top: 187.97px;
        left: 137px
    }
    #HEADLINE693 {
        padding: 0;
        height: 18px
    }
    #HEADLINE693>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #PARAGRAPH688>.widget-content,
    #PARAGRAPH695>.widget-content {
        font-size: 13px;
        text-align: justify
    }
    #PARAGRAPH695 {
        top: 308.92px;
        left: 0;
        padding: 0;
        width: 301px;
        height: 57px
    }
    #GROUP715 {
        top: 251.55px;
        left: 661.77px
    }
    #BOX687 {
        top: 0;
        left: 74px
    }
    #PARAGRAPH688 {
        top: 308.94px;
        left: 0;
        padding: 0;
        width: 301px;
        height: 38px
    }
    #HEADLINE689 {
        top: 236.08px;
        left: 3.3px;
        padding: 0;
        width: 295px;
        height: 18px
    }
    #HEADLINE689>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE690 {
        top: 258.91px;
        left: 10.98px;
        padding: 0;
        width: 290px;
        height: 16px
    }
    #HEADLINE690>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE691 {
        top: 187.98px;
        left: 137px
    }
    #HEADLINE43 {
        top: 80px;
        left: 168px;
        width: 618px
    }
    #HEADLINE43>.widget-content {
        font-size: 30px;
        text-align: center
    }
    #HEADLINE287 {
        top: 179px;
        left: 328px;
        padding: 0;
        width: 420px;
        height: 30px
    }
    #HEADLINE287>.widget-content {
        font-size: 24px;
        text-align: left
    }
    #PARAGRAPH285 {
        top: 234px;
        left: 372px;
        padding: 0;
        width: 539px;
        height: 24px
    }
    #PARAGRAPH285>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #LINE286 {
        top: 209px;
        left: 328px;
        width: 514px;
        height: 25px
    }
    #HEADLINE290 {
        top: 147px;
        left: 330px;
        padding: 0;
        width: 200px;
        height: 26px
    }
    #HEADLINE290>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #HEADLINE532>.widget-content,
    #HEADLINE533>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #HEADLINE532 {
        top: 268px;
        left: 373px;
        padding: 0;
        width: 478px;
        height: 72px
    }
    #HEADLINE533 {
        top: 346px;
        left: 374px;
        padding: 0;
        width: 477px;
        height: 48px
    }
    #SHAPE534 {
        top: 228px;
        left: 338px;
        width: 32px;
        height: 32px
    }
    #SHAPE535 {
        top: 262px;
        left: 340px;
        width: 32px;
        height: 32px
    }
    #SHAPE536 {
        top: 340px;
        left: 342px;
        width: 32px;
        height: 32px
    }
    #BOX283 {
        top: 147px;
        left: 56px;
        width: 211px;
        height: 207px
    }
    #BOX537 {
        top: 133px;
        left: 41px;
        width: 241px;
        height: 237px
    }
    #HEADLINE548 {
        top: 103.48px;
        left: 103.91px;
        padding: 0;
        width: 779px;
        height: 34px
    }
    #HEADLINE548>.widget-content {
        font-size: 28px;
        text-align: left
    }
    #LISTOP549 {
        top: 198.5px;
        left: 57px;
        width: 352px;
        height: 330px
    }
    #LISTOP549>.widget-content {
        font-size: 18px;
        text-align: justify
    }
    #LISTOP549>ol.widget-content li::before {
        content: counter(linum, disc);
        width: 30px;
        height: 30px;
        font-size: 15px;
        color: rgba(51, 51, 51, 1);
        margin-right: 0
    }
    #SHAPE566,
    #SHAPE567,
    #SHAPE568,
    #SHAPE569,
    #SHAPE570,
    #SHAPE571 {
        width: 18px;
        height: 17px
    }
    #LISTOP549>ol.widget-content li {
        margin-bottom: 10px
    }
    #LISTOP549>ol.widget-content li:last-child {
        margin-bottom: 0
    }
    #YOUTUBE550 {
        top: 229px;
        left: 437px;
        width: 523px;
        height: 291px
    }
    #SHAPE566 {
        top: 351.92px;
        left: 38px
    }
    #SHAPE567 {
        top: 416.92px;
        left: 38px
    }
    #SHAPE568 {
        top: 473.91px;
        left: 38px
    }
    #SHAPE569 {
        top: 292.91px;
        left: 36.91px
    }
    #SHAPE570 {
        top: 232.91px;
        left: 35.9px
    }
    #SHAPE571 {
        top: 205.5px;
        left: 36px
    }
    #PARAGRAPH216 {
        top: 94.5px;
        left: 37.5px;
        padding: 0;
        width: 625px;
        height: 24px
    }
    #PARAGRAPH216>.widget-content {
        font-size: 14px;
        text-align: left
    }
    #IMAGE675 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/d/59c0798c55a6f2f159d40cd8/popip2-1506090959037.png)
    }
    #LINE193,
    #PARAGRAPH175 {
        left: 21px;
        width: 247px
    }
    #GROUP248,
    #GROUP254,
    #GROUP262,
    #GROUP282,
    #GROUP538 {
        height: 192px
    }
    #BOX118,
    #BOX229,
    #BOX243,
    #BOX249,
    #BOX263,
    #BOX275 {
        width: 467px;
        height: 168px
    }
    #HEADLINE119,
    #HEADLINE230,
    #HEADLINE244,
    #HEADLINE250,
    #HEADLINE264,
    #HEADLINE276 {
        top: 24px;
        height: 27px;
        width: 285px
    }
    #BUTTON205,
    #BUTTON232,
    #BUTTON246,
    #BUTTON251,
    #BUTTON265,
    #BUTTON278 {
        top: 111px;
        left: 204px;
        width: 138px;
        height: 40px
    }
    #HEADLINE120,
    #HEADLINE231,
    #HEADLINE245,
    #HEADLINE252,
    #HEADLINE266,
    #HEADLINE277 {
        top: 55px;
        left: 152px;
        width: 303px;
        height: 48px
    }
    #BOX218,
    #BOX233,
    #BOX247,
    #BOX253,
    #BOX267,
    #BOX279,
    #BOX676,
    #BOX777 {
        width: 119px;
        height: 116px
    }
    #HEADLINE174,
    #HEADLINE179,
    #HEADLINE184 {
        height: 24px;
        left: 1px;
        top: 0
    }
    #PARAGRAPH180,
    #PARAGRAPH185 {
        top: 41px;
        padding: 0;
        height: 60px
    }
    #LINE193,
    #LINE195,
    #LINE196 {
        top: 16px;
        height: 25px
    }
    #IMAGE675 {
        top: -223.98px;
        left: -565.02px;
        width: 1514.19px;
        height: 689px
    }
    #GROUP248 {
        top: 394.55px;
        left: 1px;
        width: 467px
    }
    #BOX249 {
        top: 24px;
        left: 1px
    }
    #HEADLINE250 {
        left: 152px;
        padding: 0
    }
    #HEADLINE250>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #BUTTON251 {
        padding: 0
    }
    #BUTTON251>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE252 {
        padding: 0
    }
    #HEADLINE252>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #BOX253,
    #BOX267 {
        top: 0;
        left: 20px
    }
    #GROUP262 {
        top: 627.55px;
        left: 494px;
        width: 467px
    }
    #BOX263 {
        top: 24px;
        left: 1px
    }
    #HEADLINE264 {
        left: 152px;
        padding: 0
    }
    #HEADLINE264>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #BUTTON265 {
        padding: 0
    }
    #BUTTON265>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE266 {
        padding: 0
    }
    #HEADLINE266>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #BOX676 {
        top: 0;
        left: 20px
    }
    #GROUP282 {
        top: 628.55px;
        left: 0;
        width: 467px
    }
    #BOX275 {
        top: 24px;
        left: 1px
    }
    #HEADLINE276 {
        left: 152px;
        padding: 0
    }
    #HEADLINE276>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #HEADLINE277 {
        padding: 0
    }
    #HEADLINE277>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #BUTTON278 {
        padding: 0
    }
    #BUTTON278>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX279 {
        top: 0;
        left: 20px
    }
    #GROUP453 {
        top: 161.53px;
        left: 0;
        width: 467px;
        height: 191.98px
    }
    #BOX218 {
        top: 0;
        left: 20.97px
    }
    #BOX118 {
        top: 23.98px;
        left: 1px
    }
    #HEADLINE119 {
        left: 152px;
        padding: 0
    }
    #HEADLINE119>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #HEADLINE120 {
        padding: 0
    }
    #HEADLINE120>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #BUTTON205 {
        padding: 0
    }
    #BUTTON205>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX777 {
        top: 0;
        left: 20.97px
    }
    #BUTTON471 {
        top: 888.5px;
        left: 387.24px;
        padding: 0;
        width: 191px;
        height: 46px
    }
    #BUTTON471>.widget-content {
        font-size: 20px;
        text-align: center
    }
    #GROUP254 {
        top: 397.5px;
        left: 492px;
        width: 467px
    }
    #BOX243 {
        top: 24px;
        left: 1px
    }
    #HEADLINE244 {
        left: 152px;
        padding: 0
    }
    #HEADLINE244>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #HEADLINE245 {
        padding: 0
    }
    #HEADLINE245>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #BUTTON246 {
        padding: 0
    }
    #BUTTON246>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX247 {
        top: 0;
        left: 21.23px
    }
    #HEADLINE213 {
        top: 220.55px;
        left: -233px;
        padding: 0;
        width: 548px;
    }
    #HEADLINE213>.widget-content {
        font-size: 24px;
        text-align: left
    }
    #HEADLINE95 {
        top: 90.5px;
        left: 315.24px;
        padding: 0;
        width: 348px;
        height: 34px
    }
    #HEADLINE95>.widget-content {
        font-size: 28px;
        text-align: center
    }
    #GROUP538 {
        top: 161.5px;
        left: 493.23px;
        width: 467px
    }
    #BOX229 {
        top: 24px;
        left: 1px
    }
    #HEADLINE230 {
        left: 152px;
        padding: 0
    }
    #HEADLINE230>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #BUTTON232 {
        padding: 0
    }
    #BUTTON232>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE231 {
        padding: 0
    }
    #HEADLINE231>.widget-content {
        font-size: 18px;
        text-align: left
    }
    #BOX233 {
        top: 0;
        left: 19.98px
    }
    #GROUP449 {
        top: 137px;
        left: 1px;
        width: 285px;
        height: 121px
    }
    #HEADLINE174 {
        padding: 0;
        width: 285px
    }
    #HEADLINE174>.widget-content {
        font-size: 18px;
        text-align: center
    }
    #PARAGRAPH175 {
        top: 41px;
        padding: 0;
        height: 80px
    }
    #PARAGRAPH175>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP450 {
        top: 136.5px;
        left: 349px;
        width: 285px;
        height: 101px
    }
    #LINE195 {
        left: 18px;
        width: 250px
    }
    #HEADLINE179 {
        padding: 0;
        width: 285px
    }
    #HEADLINE179>.widget-content {
        font-size: 18px;
        text-align: center
    }
    #PARAGRAPH180 {
        left: 38px;
        width: 211px
    }
    #PARAGRAPH180>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP451 {
        top: 137px;
        left: 688px;
        width: 251px;
        height: 101px
    }
    #LINE196 {
        left: 2px;
        width: 250px
    }
    #HEADLINE184 {
        padding: 0;
        width: 250px
    }
    #HEADLINE184>.widget-content {
        font-size: 18px;
        text-align: center
    }
    #PARAGRAPH185 {
        left: 14px;
        width: 228px
    }
    #PARAGRAPH185>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #SHAPE181 {
        top: 28.5px;
        left: 474px;
        width: 50.61px;
        height: 92px
    }
    #IMAGE201 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png)
    }
    #IMAGE201 {
        top: 32.55px;
        left: 556px;
        width: 79px;
        height: 79px
    }
    #SHAPE176 {
        top: 29.5px;
        left: 123px;
        width: 50.61px;
        height: 92px
    }
    #IMAGE198 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png)
    }
    #IMAGE198 {
        top: 36.55px;
        left: 196px;
        width: 80px;
        height: 80px
    }
    #SHAPE186 {
        top: 28.5px;
        left: 787.22px;
        width: 50.61px;
        height: 92px
    }
    #IMAGE197 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png)
    }
    #HEADLINE355,
    #HEADLINE356 {
        left: 32px;
        width: 330px;
        padding: 0
    }
    #SHAPE431,
    #SHAPE432,
    #SHAPE434 {
        width: 109px;
        height: 109px
    }
    #ITEM_FORM351,
    #ITEM_FORM352,
    #ITEM_FORM353 {
        width: 320px;
        height: 35.64px
    }
    #IMAGE197 {
        top: 26.55px;
        left: 897px;
        width: 79px;
        height: 79px
    }
    #GROUP437 {
        top: 324.23px;
        left: 61px;
        width: 422px;
        height: 113px
    }
    #SHAPE431 {
        top: 4px;
        left: 314px
    }
    #SHAPE434 {
        top: 2px;
        left: 208px
    }
    #SHAPE430 {
        top: 0;
        left: 1px;
        width: 108px;
        height: 108px
    }
    #SHAPE432 {
        top: 1px;
        left: 104px
    }
    #COUNTDOWN4355 {
        top: 26px;
        left: 1px;
        width: 421px;
        height: 57px
    }
    #COUNTDOWN4355>.widget-content {
        font-size: 50px
    }
    #HEADLINE438 {
        top: 68.7px;
        left: 57.01px;
        padding: 0;
        width: 448px;
        height: 72px
    }
    #HEADLINE438>.widget-content {
        font-size: 30px;
        text-align: center
    }
    #HEADLINE499 {
        top: 278.25px;
        left: 165px;
        padding: 0;
        width: 218px;
        height: 34px
    }
    #HEADLINE499>.widget-content {
        font-size: 28px;
        text-align: left
    }
    #LINE500 {
        top: 287.25px;
        left: 81px;
        width: 66px;
        height: 25px
    }
    #LINE501 {
        top: 286.25px;
        left: 400px;
        width: 67px;
        height: 25px
    }
    #HEADLINE636 {
        top: 441.22px;
        left: 81.91px;
        padding: 0;
        width: 558px;
        height: 25.45px
    }
    #HEADLINE636>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #HEADLINE637 {
        top: 229.83px;
        left: 70.91px;
        padding: 0;
        width: 569.01px;
        height: 30px
    }
    #HEADLINE637>.widget-content {
        font-size: 24px;
        text-align: left
    }
    #GROUP452 {
        top: 154.7px;
        left: 111.01px;
        width: 377px;
        height: 62px
    }
    #BOX439 {
        top: 0;
        left: 1px;
        width: 343px;
        height: 62px
    }
    #BOX440 {
        top: 0;
        left: 0;
        width: 171px;
        height: 62px
    }
    #HEADLINE441 {
        top: 9px;
        left: 27px;
        padding: 0;
        width: 140px;
        height: 40px
    }
    #HEADLINE441>.widget-content {
        font-size: 34px;
        text-align: center
    }
    #HEADLINE444 {
        top: 9px;
        left: 178px;
        padding: 0;
        width: 200px;
        height: 41px
    }
    #HEADLINE444>.widget-content {
        font-size: 35px;
        text-align: left
    }
    #BOX349 {
        top: 68px;
        left: 548px;
        width: 387px;
        height: 414px
    }
    #HEADLINE355 {
        top: 38px;
        height: 34px
    }
    #HEADLINE355>.widget-content {
        font-size: 24px;
        text-align: left
    }
    #HEADLINE356 {
        top: 120px;
        height: 19px
    }
    #HEADLINE356>.widget-content {
        font-size: 14px;
        text-align: left
    }
    #FORM350>.widget-content,
    #ITEM_FORM351>.widget-content,
    #ITEM_FORM352>.widget-content,
    #ITEM_FORM353>.widget-content {
        font-size: 13px
    }
    #FORM350 {
        top: 121.98px;
        left: 31.98px;
        width: 321px;
        height: 194.5px
    }
    #ITEM_FORM351 {
        top: 0;
        left: 0
    }
    #ITEM_FORM352 {
        top: 54.19px;
        left: 1px
    }
    #ITEM_FORM353 {
        top: 107.5px;
        left: 1px
    }
    #ITEM_FORM377 {
        top: 161.5px;
        left: 0;
        width: 321px;
        height: 33px
    }
    #BUTTON354 {
        top: 345.48px;
        left: 83px;
        padding: 0;
        width: 233px;
        height: 40px
    }
    #BUTTON354>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #IMAGE379 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/logo-lakita-w-1506397011966.png)
    }
    #ITEM_FORM661,
    #ITEM_FORM662,
    #ITEM_FORM663 {
        width: 469px;
        height: 44.02px;
        left: 0
    }
    #SHAPE668,
    #SHAPE671 {
        width: 26px;
        height: 26px
    }
    #IMAGE379 {
        top: 24.5px;
        left: 82px;
        width: 215.38px;
        height: 67px
    }
    #PARAGRAPH640 {
        top: 563.56px;
        left: 181px;
        padding: 0;
        width: 640px;
        height: 95px
    }
    #PARAGRAPH640>.widget-content {
        font-size: 13px;
        text-align: center
    }
    #FORM660>.widget-content,
    #ITEM_FORM661>.widget-content,
    #ITEM_FORM662>.widget-content,
    #ITEM_FORM663>.widget-content {
        font-size: 14px
    }
    #FORM660 {
        top: 358.5px;
        left: 96px;
        width: 469px;
        height: 164.11px
    }
    #ITEM_FORM661 {
        top: 0
    }
    #ITEM_FORM662 {
        top: 58.72px
    }
    #ITEM_FORM663 {
        top: 120.1px
    }
    #BUTTON664 {
        top: 541.5px;
        left: 243px;
        padding: 0;
        width: 175px;
        height: 40px
    }
    #BUTTON664>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #SHAPE668 {
        top: 181.5px;
        left: 104px
    }
    #BOX657 {
        top: 1.5px;
        left: 0;
        width: 661px;
        height: 84px
    }
    #SHAPE659 {
        top: 23px;
        left: 34px;
        width: 50px;
        height: 50px
    }
    #HEADLINE658 {
        top: 33px;
        left: 101px;
        padding: 0;
        width: 497px;
        height: 29px
    }
    #HEADLINE658>.widget-content {
        font-size: 21px;
        text-align: left
    }
    #HEADLINE665 {
        top: 178.5px;
        left: 134px;
        padding: 0;
        width: 557px;
        height: 150px
    }
    #HEADLINE665>.widget-content {
        font-size: 15px;
        text-align: left
    }
    #SHAPE669 {
        top: 239.5px;
        left: 104px;
        width: 27px;
        height: 27px
    }
    #SHAPE671 {
        top: 270.5px;
        left: 105px
    }
    #HEADLINE672 {
        top: 111.5px;
        left: 57px;
        padding: 0;
        width: 554px;
        height: 60px
    }
    #HEADLINE672>.widget-content {
        font-size: 24px;
        text-align: left
    }
    #BOX369 {
        top: 38.5px;
        left: 59px;
        width: 680px;
        height: 342px
    }
    #IMAGE370 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/phong-2.png)
    }
    #IMAGE370 {
        top: 58px;
        left: 21.52px;
        width: 251.52px;
        height: 206px
    }
    #BOX371 {
        top: 0;
        left: 290px;
        width: 390px;
        height: 342px
    }
    #BOX372 {
        top: 54px;
        left: 167px;
        width: 63px;
        height: 63px
    }
    #SHAPE373 {
        top: 12px;
        left: 14px;
        width: 36px;
        height: 36px
    }
    #HEADLINE374 {
        top: 141px;
        left: 30px;
        padding: 0;
        width: 334px;
        height: 36px
    }
    #HEADLINE374>.widget-content {
        font-size: 30px;
        text-align: center
    }
    #LINE376 {
        top: 177px;
        left: 51px;
        width: 301px;
        height: 25px
    }
    #PARAGRAPH375 {
        top: 196px;
        left: 350px;
        padding: 0;
        width: 286px;
        height: 110px
    }
    #PARAGRAPH375>.widget-content {
        font-size: 14px;
        text-align: center
    }
}

#SECTION9 {
    display: block;
    background-color: rgba(9, 142, 201, 1)
}

#SECTION9>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION2 {
    display: block;
    background-image: url(https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg);
    background-color: rgba(255, 255, 255, 0);
    background-position: top left
}

#SECTION2>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, .25)
}

#SECTION507 {
    display: block;
    background-image: url(https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png);
    background-color: rgba(255, 255, 255, 0);
    background-position: top center;
    background-repeat: repeat
}

#POPUP656 .container,
#SECTION341,
#SECTION502,
#SECTION527,
#SECTION94 {
    background-position: top left;
    display: block
}

#SECTION507>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, .57)
}

#SECTION502 {
    background-image: url(https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg);
    background-color: rgba(255, 255, 255, 0)
}

#SECTION502>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, .49)
}

#SECTION527 {
    background-image: url(https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/untitled-3-1506079046658.jpg);
    background-color: rgba(255, 255, 255, 0)
}

#SECTION527>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION472>.ladi-widget-overlay,
#SECTION735 {
    background-color: rgba(255, 255, 255, 0)
}

#SECTION472 {
    display: block;
    background-color: rgba(224, 224, 224, 1)
}

#SECTION735 {
    display: block
}

#SECTION735>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION754 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#SECTION754>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION678 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#SECTION678>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION42 {
    display: block;
    background-color: rgba(224, 224, 224, 1)
}

#SECTION42>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION547 {
    display: block;
    background-color: rgba(255, 255, 255, 1)
}

#SECTION547>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#POPUP212 .container {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#POPUP212>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION94 {
    background-image: url(https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png);
    background-color: rgba(0, 176, 255, 1)
}

#SECTION94>.ladi-widget-overlay {
    background-color: rgba(242, 242, 242, .81)
}

#SECTION171 {
    display: block;
    background-color: rgba(255, 255, 255, 1)
}

#SECTION171>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SECTION341 {
    background-image: url(https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png);
    background-color: rgba(255, 255, 255, 0)
}

#SECTION341>.ladi-widget-overlay {
    background-color: rgba(6, 13, 46, .4)
}

#POPUP656 .container {
    background-image: url(https://static.ladipage.net/d/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png);
    background-color: rgba(237, 237, 237, 1);
    background-size: auto 100%;
    background-repeat: no-repeat
}

#BOX480>.widget-content,
#BOX741>.widget-content {
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat
}

#POPUP656>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, .64)
}

#POPUP368 .container {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON205,
#BUTTON232,
#BUTTON246,
#BUTTON251,
#BUTTON278,
#BUTTON354,
#BUTTON454,
#BUTTON471,
#BUTTON506,
#BUTTON511,
#BUTTON530,
#BUTTON664,
#BUTTON753,
#BUTTON770 {
    display: table
}

#POPUP368>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE513>.widget-content,
#IMAGE187>.ladi-widget-overlay,
#IMAGE187>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE187 {
    display: block
}

#IMAGE187>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#HEADLINE513 {
    display: block
}

#HEADLINE513>.widget-content {
    font-family: "Open Sans", sans-serif;
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    font-weight: 400;
    line-height: 18px
}

#HEADLINE514>.widget-content,
#HEADLINE515>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(255, 255, 255, 1);
    font-family: "Open Sans", sans-serif;
    line-height: 18px;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#HEADLINE513>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE514 {
    display: block
}

#HEADLINE514>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE515 {
    display: block
}

#HEADLINE519>.widget-content,
#HEADLINE524>.widget-content,
#LINEVERTICAL516>.widget-content,
#LINEVERTICAL517>.widget-content,
#LINEVERTICAL518>.widget-content,
#LINEVERTICAL520>.widget-content {
    color: rgba(0, 0, 0, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE515>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINEVERTICAL516 {
    display: block
}

#LINEVERTICAL516>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINEVERTICAL517 {
    display: block
}

#LINEVERTICAL517>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINEVERTICAL518 {
    display: block
}

#LINEVERTICAL518>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE519 {
    display: block
}

#HEADLINE519>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
    line-height: 18px
}

#HEADLINE519>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINEVERTICAL520 {
    display: block
}

#LINEVERTICAL520>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE524 {
    display: block
}

#HEADLINE524>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
    line-height: 18px
}

#HEADLINE524>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH4 {
    display: block
}

#PARAGRAPH4>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(238, 238, 238, 1);
    font-weight: 400;
    line-height: 27px
}

#HEADLINE5>.widget-content,
#HEADLINE7>.widget-content {
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH4>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE7 {
    display: block
}

#HEADLINE7>.widget-content {
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    line-height: 36px
}

#HEADLINE7>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE5 {
    display: block
}

#HEADLINE5>.widget-content {
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    line-height: 61px;
    letter-spacing: 0
}

#HEADLINE509>.widget-content,
#HEADLINE510>.widget-content,
#PARAGRAPH508>.widget-content {
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#HEADLINE5>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON454>.widget-content {
    background-color: #3D9BE9;
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON454>.ladi-widget-overlay,
#HEADLINE509>.ladi-widget-overlay,
#HEADLINE509>.widget-content,
#LINE526>.ladi-widget-overlay,
#LINE526>.widget-content,
#PARAGRAPH508>.ladi-widget-overlay,
#PARAGRAPH508>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE509 {
    display: block
}

#HEADLINE509>.widget-content {
    font-family: "Open Sans", sans-serif;
    color: rgba(255, 255, 255, 1);
    line-height: 36px
}

#PARAGRAPH508 {
    display: block
}

#PARAGRAPH508>.widget-content {
    font-family: Roboto, sans-serif;
    color: rgba(238, 238, 238, 1);
    line-height: 27px
}

#LINE526 {
    display: block
}

#LINE526>.widget-content .line {
    border-style: solid;
    border-color: rgba(3, 169, 244, 1);
    margin-top: 9.5px;
    border-width: 3px 0 0;
    border-width: 3px 0 0
}

#LINE526>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#BUTTON511>.widget-content {
    background-color: #3D9BE9;
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#HEADLINE504>.widget-content,
#HEADLINE505>.widget-content,
#HEADLINE510>.widget-content {
    color: rgba(255, 255, 255, 1);
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON511>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE510 {
    display: block
}

#HEADLINE510>.widget-content {
    font-family: 'Roboto Slab', serif;
    text-transform: uppercase;
    line-height: 61px;
    letter-spacing: 0
}

#HEADLINE510>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE504 {
    display: block
}

#HEADLINE504>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
    line-height: 36px
}

#HEADLINE505>.widget-content,
#HEADLINE525>.widget-content {
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#HEADLINE504>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE505 {
    display: block
}

#HEADLINE505>.widget-content {
    text-transform: uppercase;
    line-height: 66px;
    letter-spacing: 0
}

#HEADLINE505>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON506>.widget-content {
    background-color: #3D9BE9;
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#HEADLINE525>.widget-content,
#HEADLINE528>.widget-content,
#HEADLINE529>.widget-content {
    color: rgba(255, 255, 255, 1);
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON506>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE525 {
    display: block
}

#HEADLINE525>.widget-content {
    line-height: 126px
}

#HEADLINE525>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE528 {
    display: block
}

#HEADLINE528>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
    line-height: 31px
}

#HEADLINE475>.widget-content,
#HEADLINE529>.widget-content,
#HEADLINE531>.widget-content {
    font-family: Roboto, sans-serif;
    font-weight: 400;
    
    -webkit-font-smoothing: antialiased
}

#HEADLINE528>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE529 {
    display: block
}

#HEADLINE529>.widget-content {
    text-transform: uppercase;
    line-height: 46px;
    letter-spacing: 0
}

#HEADLINE529>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON530>.widget-content {
    background-color: #3D9BE9;
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON530>.ladi-widget-overlay,
#HEADLINE475>.ladi-widget-overlay,
#HEADLINE475>.widget-content,
#HEADLINE476>.ladi-widget-overlay,
#HEADLINE476>.widget-content,
#HEADLINE477>.ladi-widget-overlay,
#HEADLINE477>.widget-content,
#HEADLINE531>.ladi-widget-overlay,
#HEADLINE531>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE531 {
    display: block
}

#HEADLINE531>.widget-content {
    color: rgba(0, 176, 255, 1);
    line-height: 106px
}

#HEADLINE475 {
    display: block
}

#HEADLINE475>.widget-content {
    opacity: 1;
    color: rgba(33, 33, 33, 1);
    line-height: 34px
}

#HEADLINE476 {
    display: block
}

#HEADLINE476>.widget-content {
    opacity: 1;
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(66, 66, 66, 1);
    font-weight: 700;
    line-height: 26px
}

#HEADLINE477 {
    display: block
}

#HEADLINE477>.widget-content {
    opacity: 1;
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(41, 98, 255, 1);
    font-weight: 400;
    line-height: 16px
}

#BOX480 {
    display: block
}

#BOX480>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg);
    background-color: rgba(255, 255, 255, 1);
    opacity: 1;
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    border-radius: 550px
}

#BOX480>.ladi-widget-overlay,
#HEADLINE673>.widget-content,
#LINE634>.ladi-widget-overlay,
#LINE634>.widget-content,
#PARAGRAPH633>.ladi-widget-overlay,
#PARAGRAPH633>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE287>.widget-content,
#HEADLINE673>.widget-content,
#PARAGRAPH633>.widget-content {
    font-family: "Open Sans", sans-serif
}

#PARAGRAPH633 {
    display: block
}

#PARAGRAPH633>.widget-content {
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    font-weight: 400;
    line-height: 24px
}

#LINE634 {
    display: block
}

#LINE634>.widget-content .line {
    border-style: solid;
    border-color: rgba(0, 0, 0, 1);
    margin-top: 12px;
    border-width: 1px 0 0;
    border-width: 1px 0 0
}

#LINE634>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#HEADLINE673 {
    display: block
}

#HEADLINE673>.widget-content {
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    font-weight: 400;
    line-height: 24px
}

#HEADLINE736>.widget-content,
#PARAGRAPH737>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased;
    background-color: rgba(255, 255, 255, 0);
    opacity: 1
}

#HEADLINE673>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE736 {
    display: block
}

#HEADLINE736>.widget-content {
    color: rgba(41, 41, 41, 1);
    font-weight: 700;
    line-height: 34px
}

#HEADLINE736>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH737 {
    display: block
}

#PARAGRAPH737>.widget-content {
    color: rgba(46, 46, 46, 1);
    font-weight: 300;
    line-height: 20px
}

#PARAGRAPH737>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON753>.widget-content {
    background-color: #3D9BE9;
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON753>.ladi-widget-overlay,
#GROUP773,
#GROUP773>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP773 {
    display: block
}

#BOX741 {
    display: block
}

#BOX741>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
    background-color: rgba(189, 189, 189, 1);
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    border-radius: 110px;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(3, 169, 244, 1)
}

#BOX741>.ladi-widget-overlay,
#HEADLINE742>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE742>.widget-content,
#HEADLINE750>.widget-content,
#HEADLINE755>.widget-content,
#PARAGRAPH752>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased
}

#HEADLINE742 {
    display: block
}

#HEADLINE742>.widget-content {
    color: rgba(66, 66, 66, 1);
    font-weight: 300;
    line-height: 16px;
    letter-spacing: 0
}

#HEADLINE750>.widget-content,
#SHAPE743>.widget-content {
    color: rgba(3, 169, 244, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE742>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE743 {
    display: block
}

#SHAPE743>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE750 {
    display: block
}

#HEADLINE750>.widget-content {
    text-transform: uppercase;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px
}

#HEADLINE750>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH752 {
    display: block
}

#PARAGRAPH752>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(66, 66, 66, 1);
    font-weight: 400;
    line-height: 19px
}

#PARAGRAPH752>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE755 {
    display: block
}

#HEADLINE755>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    opacity: 1;
    color: rgba(41, 41, 41, 1);
    font-weight: 700;
    line-height: 34px
}

#HEADLINE757>.widget-content,
#PARAGRAPH756>.widget-content {
    font-weight: 300;
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased
}

#HEADLINE755>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH756 {
    display: block
}

#PARAGRAPH756>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    opacity: 1;
    color: rgba(46, 46, 46, 1);
    line-height: 20px
}

#PARAGRAPH756>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON770>.widget-content {
    background-color: #3D9BE9;
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON770>.ladi-widget-overlay,
#GROUP774,
#GROUP774>.ladi-widget-overlay,
#HEADLINE757>.ladi-widget-overlay,
#HEADLINE757>.widget-content,
#HEADLINE771>.ladi-widget-overlay,
#HEADLINE771>.widget-content,
#PARAGRAPH768>.ladi-widget-overlay,
#PARAGRAPH768>.widget-content,
#SHAPE758>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP774 {
    display: block
}

#HEADLINE757 {
    display: block
}

#HEADLINE757>.widget-content {
    color: rgba(66, 66, 66, 1);
    line-height: 16px;
    letter-spacing: 0
}

#SHAPE758 {
    display: block
}

#SHAPE758>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(3, 169, 244, 1)
}

#PARAGRAPH768 {
    display: block
}

#PARAGRAPH768>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased;
    color: rgba(66, 66, 66, 1);
    font-weight: 400;
    line-height: 19px
}

#HEADLINE771 {
    display: block
}

#HEADLINE771>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased;
    color: rgba(3, 169, 244, 1);
    text-transform: uppercase;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px
}

#BOX759>.widget-content,
#BOX772>.widget-content {
    font-family: 'Open Sans', sans-serif;
    color: rgba(0, 0, 0, 1);
    border-radius: 110px;
    border-width: 3px;
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-color: rgba(3, 169, 244, 1);
    border-style: solid
}

#BOX772 {
    display: block
}

#BOX772>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg);
    background-color: rgba(189, 189, 189, 1);
    
    -webkit-font-smoothing: antialiased
}

#BOX772>.ladi-widget-overlay,
#GROUP775,
#GROUP775>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP775 {
    display: block
}

#BOX759 {
    display: block
}

#BOX759>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
    background-color: rgba(189, 189, 189, 1);
    
    -webkit-font-smoothing: antialiased
}

#BOX759>.ladi-widget-overlay,
#HEADLINE760>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE760>.widget-content,
#HEADLINE767>.widget-content,
#PARAGRAPH769>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased
}

#HEADLINE760 {
    display: block
}

#HEADLINE760>.widget-content {
    color: rgba(66, 66, 66, 1);
    font-weight: 300;
    line-height: 16px;
    letter-spacing: 0
}

#HEADLINE767>.widget-content,
#SHAPE761>.widget-content {
    color: rgba(3, 169, 244, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE760>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE761 {
    display: block
}

#SHAPE761>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE767 {
    display: block
}

#HEADLINE767>.widget-content {
    text-transform: uppercase;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px
}

#PARAGRAPH763>.widget-content,
#PARAGRAPH769>.widget-content {
    font-weight: 400;
    line-height: 19px
}

#HEADLINE767>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH769 {
    display: block
}

#PARAGRAPH769>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(66, 66, 66, 1)
}

#PARAGRAPH769>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP776 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#GROUP776>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX762 {
    display: block
}

#BOX762>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png);
    background-color: rgba(189, 189, 189, 1);
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 110px;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(3, 169, 244, 1)
}

#HEADLINE764>.widget-content,
#HEADLINE765>.widget-content,
#PARAGRAPH763>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(66, 66, 66, 1);
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased
}

#BOX762>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH763 {
    display: block
}

#PARAGRAPH763>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE764 {
    display: block
}

#HEADLINE764>.widget-content {
    text-transform: uppercase;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px
}

#HEADLINE764>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE765 {
    display: block
}

#HEADLINE765>.widget-content {
    font-weight: 300;
    line-height: 16px;
    letter-spacing: 0
}

#HEADLINE681>.widget-content,
#SHAPE766>.widget-content {
    color: rgba(3, 169, 244, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE765>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE766 {
    display: block
}

#SHAPE766>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP713 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#GROUP713>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE681 {
    display: block
}

#HEADLINE681>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased;
    text-transform: uppercase;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px
}

#HEADLINE681>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE682 {
    display: block
}

#HEADLINE682>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased;
    color: rgba(66, 66, 66, 1);
    font-weight: 300;
    line-height: 16px;
    letter-spacing: 0
}

#HEADLINE682>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE683 {
    display: block
}

#SHAPE683>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(3, 169, 244, 1)
}

#SHAPE683>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX692 {
    display: block
}

#BOX692>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/luu-tuan-anh-1506399328492.jpg);
    background-color: rgba(189, 189, 189, 1);
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 110px;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(3, 169, 244, 1)
}

#BOX692>.ladi-widget-overlay,
#GROUP714,
#GROUP714>.ladi-widget-overlay,
#PARAGRAPH694>.ladi-widget-overlay,
#PARAGRAPH694>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH694 {
    display: block
}

#PARAGRAPH694>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased;
    color: rgba(66, 66, 66, 1);
    font-weight: 400;
    line-height: 19px
}

#GROUP714 {
    display: block
}

#BOX684 {
    display: block
}

#BOX684>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/phamthihai2-1506399830311.png);
    background-color: rgba(189, 189, 189, 1);
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 110px;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(3, 169, 244, 1)
}

#BOX684>.ladi-widget-overlay,
#HEADLINE685>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE685>.widget-content,
#HEADLINE693>.widget-content,
#PARAGRAPH695>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased
}

#HEADLINE685 {
    display: block
}

#HEADLINE685>.widget-content {
    color: rgba(66, 66, 66, 1);
    font-weight: 300;
    line-height: 16px;
    letter-spacing: 0
}

#HEADLINE693>.widget-content,
#SHAPE686>.widget-content {
    color: rgba(3, 169, 244, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE685>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE686 {
    display: block
}

#SHAPE686>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE693 {
    display: block
}

#HEADLINE693>.widget-content {
    text-transform: uppercase;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px
}

#PARAGRAPH688>.widget-content,
#PARAGRAPH695>.widget-content {
    font-weight: 400;
    line-height: 19px
}

#HEADLINE693>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH695 {
    display: block
}

#PARAGRAPH695>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(66, 66, 66, 1)
}

#PARAGRAPH695>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP715 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#GROUP715>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX687 {
    display: block
}

#BOX687>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihuyen1-1506399777238.png);
    background-color: rgba(189, 189, 189, 1);
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 110px;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(3, 169, 244, 1)
}

#HEADLINE689>.widget-content,
#HEADLINE690>.widget-content,
#PARAGRAPH688>.widget-content {
    font-family: 'Open Sans';
    color: rgba(66, 66, 66, 1);
    background-color: rgba(255, 255, 255, 0);
    
    -webkit-font-smoothing: antialiased
}

#BOX687>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH688 {
    display: block
}

#PARAGRAPH688>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE689 {
    display: block
}

#HEADLINE689>.widget-content {
    text-transform: uppercase;
    font-weight: 700;
    line-height: 18px;
    letter-spacing: 1px
}

#HEADLINE689>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE690 {
    display: block
}

#HEADLINE690>.widget-content {
    font-weight: 300;
    line-height: 16px;
    letter-spacing: 0
}

#HEADLINE690>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE691 {
    display: block
}

#SHAPE691>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(3, 169, 244, 1)
}

#SHAPE691>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE43 {
    display: block
}

#HEADLINE43>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    opacity: 1;
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 176, 255, 1);
    font-weight: 400;
    line-height: 36px
}

#HEADLINE43>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE287 {
    display: block
}

#HEADLINE287>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    font-weight: 700;
    line-height: 30px
}

#HEADLINE290>.widget-content,
#PARAGRAPH285>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#HEADLINE287>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH285 {
    display: block
}

#PARAGRAPH285>.widget-content {
    color: rgba(0, 0, 0, 1);
    line-height: 24px
}

#PARAGRAPH285>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINE286 {
    display: block
}

#LINE286>.widget-content .line {
    border-style: solid;
    border-color: rgba(3, 169, 244, 1);
    margin-top: 12px;
    border-width: 1px 0 0;
    border-width: 1px 0 0
}

#LINE286>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1)
}

#LINE286>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE290 {
    display: block
}

#HEADLINE290>.widget-content {
    color: rgba(3, 169, 244, 1);
    line-height: 26px
}

#HEADLINE532>.widget-content,
#HEADLINE533>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: "Open Sans", sans-serif;
    color: rgba(0, 0, 0, 1);
    line-height: 24px;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#HEADLINE290>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE532 {
    display: block
}

#HEADLINE532>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE533 {
    display: block
}

#SHAPE534>.widget-content,
#SHAPE535>.widget-content,
#SHAPE536>.widget-content {
    color: rgba(3, 169, 244, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE533>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE534 {
    display: block
}

#SHAPE534>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE535 {
    display: block
}

#SHAPE535>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE536 {
    display: block
}

#SHAPE536>.widget-content svg {
}

#SHAPE536>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX283 {
    display: block
}

#BOX283>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png);
    background-color: rgba(189, 189, 189, 1);
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    box-shadow: 0 0 8px rgba(0, 0, 0, .36);
    border-radius: 100px
}

#BOX283>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX537 {
    display: block
}

#BOX537>.widget-content {
    background-color: rgba(189, 189, 189, 0);
    color: rgba(0, 0, 0, 1);
    border-radius: 200px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(3, 169, 244, 1)
}

#BOX537>.ladi-widget-overlay,
#HEADLINE548>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE548 {
    display: block
}

#HEADLINE548>.widget-content {
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 176, 255, 1);
    font-weight: 400;
    line-height: 34px
}

#LISTOP549>.widget-content,
#YOUTUBE550>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1)
}

#HEADLINE548>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LISTOP549 {
    display: block
}

#LISTOP549>.widget-content {
    line-height: 30px
}

#LISTOP549>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#YOUTUBE550 {
    display: block
}

#YOUTUBE550>.widget-content {
    border-width: 5px;
    border-style: solid;
    border-color: rgba(0, 188, 212, 1)
}

#SHAPE566>.widget-content,
#SHAPE567>.widget-content,
#SHAPE568>.widget-content,
#SHAPE569>.widget-content,
#SHAPE570>.widget-content,
#SHAPE571>.widget-content {
    color: rgba(3, 169, 244, 1);
    background-color: rgba(255, 255, 255, 0)
}

#YOUTUBE550>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE566 {
    display: block
}

#SHAPE566>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE567 {
    display: block
}

#SHAPE567>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE568 {
    display: block
}

#SHAPE568>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE569 {
    display: block
}

#SHAPE569>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE570 {
    display: block
}

#SHAPE570>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE571 {
    display: block
}

#SHAPE571>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH216 {
    display: block
}

#PARAGRAPH216>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    font-family: Montserrat, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    line-height: 24px
}

#HEADLINE250>.widget-content,
#HEADLINE252>.widget-content,
#HEADLINE264>.widget-content,
#HEADLINE266>.widget-content,
#HEADLINE276>.widget-content,
#HEADLINE277>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#PARAGRAPH216>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#GROUP248,
#GROUP248>.ladi-widget-overlay,
#IMAGE675>.ladi-widget-overlay,
#IMAGE675>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE675 {
    display: block
}

#IMAGE675>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#GROUP248 {
    display: block
}

#BOX249 {
    display: block
}

#BOX249>.widget-content {
    background-color: rgba(6, 21, 64, 0);
    color: rgba(0, 0, 0, 1);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX249>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE250>.ladi-widget-overlay,
#HEADLINE250>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE250 {
    display: block
}

#HEADLINE250>.widget-content {
    color: rgba(255, 255, 255, 1);
    line-height: 27px
}

#BUTTON251>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON251>.ladi-widget-overlay,
#HEADLINE252>.ladi-widget-overlay,
#HEADLINE252>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE252 {
    display: block
}

#HEADLINE252>.widget-content {
    color: rgba(41, 182, 246, 1);
    text-transform: uppercase;
    line-height: 24px
}

#BOX253>.widget-content,
#BOX263>.widget-content,
#BOX267>.widget-content {
    color: rgba(0, 0, 0, 1);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX253 {
    display: block
}

#BOX253>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg);
    background-color: rgba(189, 189, 189, 0);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 0
}

#BOX267>.widget-content,
#BOX676>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat
}

#BOX253>.ladi-widget-overlay,
#GROUP262,
#GROUP262>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP262 {
    display: block
}

#BOX267 {
    display: block
}

#BOX267>.widget-content {
    background-color: rgba(189, 189, 189, 0);
    border-radius: 0
}

#BOX267>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX263 {
    display: block
}

#BOX263>.widget-content {
    background-color: rgba(6, 21, 64, 0)
}

#BOX263>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE264>.ladi-widget-overlay,
#HEADLINE264>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE264 {
    display: block
}

#HEADLINE264>.widget-content {
    color: rgba(255, 255, 255, 1);
    line-height: 27px
}

#BUTTON265 {
    display: table
}

#BUTTON265>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON265>.ladi-widget-overlay,
#HEADLINE266>.ladi-widget-overlay,
#HEADLINE266>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE266 {
    display: block
}

#HEADLINE266>.widget-content {
    color: rgba(41, 182, 246, 1);
    text-transform: uppercase;
    line-height: 24px
}

#BOX275>.widget-content,
#BOX676>.widget-content {
    color: rgba(0, 0, 0, 1);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX676 {
    display: block
}

#BOX676>.widget-content {
    background-color: rgba(189, 189, 189, 0);
    border-radius: 0
}

#BOX676>.ladi-widget-overlay,
#GROUP282,
#GROUP282>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP282 {
    display: block
}

#BOX275 {
    display: block
}

#BOX275>.widget-content {
    background-color: rgba(6, 21, 64, 0)
}

#BOX275>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE276>.ladi-widget-overlay,
#HEADLINE276>.widget-content,
#HEADLINE277>.ladi-widget-overlay,
#HEADLINE277>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE276 {
    display: block
}

#HEADLINE276>.widget-content {
    color: rgba(255, 255, 255, 1);
    line-height: 27px
}

#HEADLINE277 {
    display: block
}

#HEADLINE277>.widget-content {
    color: rgba(34, 196, 242, 1);
    text-transform: uppercase;
    line-height: 24px
}

#BUTTON278>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON278>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX279 {
    display: block
}

#BOX279>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg);
    background-color: rgba(189, 189, 189, 0);
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 0;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX218>.widget-content,
#BOX777>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat
}

#BOX279>.ladi-widget-overlay,
#GROUP453,
#GROUP453>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP453 {
    display: block
}

#BOX218 {
    display: block
}

#BOX218>.widget-content {
    background-color: rgba(189, 189, 189, 0);
    color: rgba(0, 0, 0, 1);
    border-radius: 0
}

#BOX218>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX118 {
    display: block
}

#BOX118>.widget-content {
    background-color: rgba(6, 21, 64, 0);
    color: rgba(0, 0, 0, 1);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#HEADLINE119>.widget-content,
#HEADLINE120>.widget-content {
    color: rgba(255, 255, 255, 1);
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    
    -webkit-font-smoothing: antialiased
}

#BOX118>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE119>.ladi-widget-overlay,
#HEADLINE119>.widget-content,
#HEADLINE120>.ladi-widget-overlay,
#HEADLINE120>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE119 {
    display: block
}

#HEADLINE119>.widget-content {
    line-height: 27px
}

#HEADLINE120 {
    display: block
}

#HEADLINE120>.widget-content {
    text-transform: uppercase;
    line-height: 24px
}

#BUTTON205>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: rgba(3, 169, 244, 1);
    line-height: 40px;
    border-radius: 5px
}

#BUTTON205>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX777 {
    display: block
}

#BOX777>.widget-content {
    background-color: rgba(189, 189, 189, 0);
    color: rgba(0, 0, 0, 1);
    border-radius: 0
}

#BOX777>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON471>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: rgba(3, 169, 244, 1);
    line-height: 26px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 1);
    border-radius: 5px
}

#BUTTON471>.ladi-widget-overlay,
#GROUP254,
#GROUP254>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP254 {
    display: block
}

#BOX243 {
    display: block
}

#BOX243>.widget-content {
    background-color: rgba(6, 21, 64, 0);
    color: rgba(0, 0, 0, 1);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX243>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE244>.ladi-widget-overlay,
#HEADLINE244>.widget-content,
#HEADLINE245>.ladi-widget-overlay,
#HEADLINE245>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE244 {
    display: block
}

#HEADLINE244>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    line-height: 27px
}

#HEADLINE245 {
    display: block
}

#HEADLINE245>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(34, 196, 242, 1);
    text-transform: uppercase;
    font-weight: 400;
    line-height: 24px
}

#BUTTON246>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON246>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX247 {
    display: block
}

#BOX247>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg);
    background-color: rgba(189, 189, 189, 0);
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 0;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX247>.ladi-widget-overlay,
#GROUP538,
#GROUP538>.ladi-widget-overlay,
#HEADLINE213>.ladi-widget-overlay,
#HEADLINE213>.widget-content,
#HEADLINE95>.ladi-widget-overlay,
#HEADLINE95>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE213 {
    display: block
}

#HEADLINE213>.widget-content {
    font-family: Montserrat, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    line-height: 30px
}

#HEADLINE95 {
    display: block
}

#HEADLINE95>.widget-content {
    opacity: 1;
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(3, 169, 244, 1);
    font-weight: 700;
    line-height: 34px
}

#HEADLINE230>.widget-content,
#HEADLINE231>.widget-content {
    font-family: "Open Sans", sans-serif;
    font-weight: 400
}

#GROUP538 {
    display: block
}

#BOX229 {
    display: block
}

#BOX229>.widget-content {
    background-color: rgba(6, 21, 64, 0);
    color: rgba(0, 0, 0, 1);
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX229>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE230>.ladi-widget-overlay,
#HEADLINE230>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE230 {
    display: block
}

#HEADLINE230>.widget-content {
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    line-height: 27px
}

#BUTTON232>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #fff;
    line-height: 40px;
    border-radius: 5px
}

#BUTTON232>.ladi-widget-overlay,
#HEADLINE231>.ladi-widget-overlay,
#HEADLINE231>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE174>.widget-content,
#HEADLINE231>.widget-content {
    line-height: 24px;
    
    -webkit-font-smoothing: antialiased
}

#HEADLINE231 {
    display: block
}

#HEADLINE231>.widget-content {
    color: rgba(41, 182, 246, 1);
    text-transform: uppercase
}

#BOX233 {
    display: block
}

#BOX233>.widget-content {
    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg);
    background-color: rgba(189, 189, 189, 0);
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 0;
    border-width: 3px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX233>.ladi-widget-overlay,
#GROUP449,
#GROUP449>.ladi-widget-overlay,
#HEADLINE174>.widget-content,
#LINE193>.ladi-widget-overlay,
#LINE193>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#LINE193>.widget-content .line,
#LINE195>.widget-content .line,
#LINE196>.widget-content .line {
    border-color: rgba(0, 188, 212, 1);
    margin-top: 12px;
    border-width: 1px 0 0;
    border-style: solid
}

#GROUP449 {
    display: block
}

#LINE193 {
    display: block
}

#LINE193>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#HEADLINE174 {
    display: block
}

#HEADLINE174>.widget-content {
    font-family: 'Open Sans', sans-serif;
    color: rgba(3, 169, 244, 1);
    font-weight: 700;
    letter-spacing: 2px
}

#LINE195>.widget-content,
#PARAGRAPH175>.widget-content {
    color: rgba(0, 0, 0, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE174>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH175 {
    display: block
}

#PARAGRAPH175>.widget-content {
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
    line-height: 20px;
    letter-spacing: 1px
}

#PARAGRAPH175>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP450 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#GROUP450>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINE195 {
    display: block
}

#LINE195>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE179 {
    display: block
}

#HEADLINE179>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(3, 169, 244, 1);
    font-weight: 700;
    line-height: 24px;
    letter-spacing: 2px
}

#LINE196>.widget-content,
#PARAGRAPH180>.widget-content {
    color: rgba(0, 0, 0, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE179>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH180 {
    display: block
}

#PARAGRAPH180>.widget-content {
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
    line-height: 20px;
    letter-spacing: 1px
}

#PARAGRAPH180>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP451 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#GROUP451>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINE196 {
    display: block
}

#LINE196>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE184 {
    display: block
}

#HEADLINE184>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(3, 169, 244, 1);
    font-weight: 700;
    line-height: 24px;
    letter-spacing: 2px
}

#HEADLINE184>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH185 {
    display: block
}

#PARAGRAPH185>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    font-weight: 400;
    line-height: 20px;
    letter-spacing: 1px
}

#PARAGRAPH185>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE181 {
    display: block
}

#SHAPE181>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(3, 169, 244, 1)
}

#SHAPE181>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE201 {
    display: block
}

#IMAGE201>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1)
}

#IMAGE201>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE176 {
    display: block
}

#SHAPE176>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(3, 169, 244, 1)
}

#SHAPE176>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE198 {
    display: block
}

#IMAGE198>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1);
    border-width: 0;
    border-style: solid;
    border-color: rgba(0, 0, 0, 1)
}

#LINE500>.widget-content .line,
#LINE501>.widget-content .line {
    border-color: rgba(255, 255, 255, 1);
    border-width: 2px 0 0;
    border-style: solid;
    margin-top: 10.5px
}

#IMAGE198>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE186 {
    display: block
}

#SHAPE186>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(3, 169, 244, 1)
}

#SHAPE430>.widget-content svg,
#SHAPE431>.widget-content svg,
#SHAPE432>.widget-content svg,
#SHAPE434>.widget-content svg {
    
}

#SHAPE186>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE197 {
    display: block
}

#IMAGE197>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1)
}

#SHAPE430>.widget-content,
#SHAPE431>.widget-content,
#SHAPE432>.widget-content,
#SHAPE434>.widget-content {
    color: rgba(1, 87, 155, 1);
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE197>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP437 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#GROUP437>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE431 {
    display: block
}

#SHAPE431>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE434 {
    display: block
}

#SHAPE434>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE430 {
    display: block
}

#SHAPE430>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE432 {
    display: block
}

#SHAPE373>.widget-content svg,
#SHAPE659>.widget-content svg,
#SHAPE668>.widget-content svg,
#SHAPE669>.widget-content svg,
#SHAPE671>.widget-content svg {
    
}

#SHAPE432>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#COUNTDOWN4355 {
    display: block
}

#COUNTDOWN4355>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    font-family: Athiti, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    line-height: 56px
}

#HEADLINE438>.widget-content,
#HEADLINE441>.widget-content,
#HEADLINE444>.widget-content,
#HEADLINE499>.widget-content,
#HEADLINE636>.widget-content,
#HEADLINE637>.widget-content {
    font-family: "Open Sans", sans-serif;
    font-weight: 400
}

#COUNTDOWN4355>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE438 {
    display: block
}

#HEADLINE438>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    line-height: 36px
}

#HEADLINE438>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE499 {
    display: block
}

#HEADLINE499>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    line-height: 34px
}

#HEADLINE499>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINE500 {
    display: block
}

#LINE500>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1)
}

#LINE500>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#LINE501 {
    display: block
}

#LINE501>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1)
}

#LINE501>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE636 {
    display: block
}

#HEADLINE636>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    line-height: 26px
}

#HEADLINE636>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE637 {
    display: block
}

#HEADLINE637>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    line-height: 30px
}

#HEADLINE637>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#GROUP452 {
    display: block;
    background-color: rgba(255, 255, 255, 0)
}

#GROUP452>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX439 {
    display: block
}

#BOX439>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: rgba(0, 0, 0, 1);
    border-radius: 100px;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(239, 83, 80, 1)
}

#ITEM_FORM351>.widget-content,
#ITEM_FORM352>.widget-content,
#ITEM_FORM353>.widget-content {
    border-width: 1px;
    border-style: solid;
    border-color: #eee
}

#BOX439>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX440 {
    display: block
}

#BOX440>.widget-content {
    background-color: rgba(239, 83, 80, 1);
    color: rgba(0, 0, 0, 1);
    border-bottom-left-radius: 50px;
    border-top-left-radius: 50px
}

#BOX440>.ladi-widget-overlay,
#HEADLINE441>.ladi-widget-overlay,
#HEADLINE441>.widget-content,
#HEADLINE444>.ladi-widget-overlay,
#HEADLINE444>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE441 {
    display: block
}

#HEADLINE441>.widget-content {
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    text-decoration: line-through;
    line-height: 40px
}

#HEADLINE444 {
    display: block
}

#HEADLINE444>.widget-content {
    
    -webkit-font-smoothing: antialiased;
    color: rgba(0, 0, 0, 1);
    line-height: 41px
}

#BUTTON354>.widget-content,
#HEADLINE355>.widget-content,
#HEADLINE356>.widget-content {
    font-family: 'Open Sans';
    
    -webkit-font-smoothing: antialiased
}

#BOX349 {
    display: block
}

#BOX349>.widget-content {
    background-color: rgba(1, 1, 1, .61);
    color: rgba(0, 0, 0, 1);
    box-shadow: 0 5px 0 rgba(255, 255, 255, 1)
}

#BOX349>.ladi-widget-overlay,
#FORM350>.ladi-widget-overlay,
#FORM350>.widget-content,
#HEADLINE355>.ladi-widget-overlay,
#HEADLINE355>.widget-content,
#HEADLINE356>.ladi-widget-overlay,
#HEADLINE356>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE355 {
    display: block
}

#HEADLINE355>.widget-content {
    color: #10E698;
    font-weight: 400;
    line-height: 34px
}

#HEADLINE356 {
    display: block
}

#HEADLINE356>.widget-content {
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    line-height: 19px
}

#FORM350 {
    display: block
}

#FORM350>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#FORM350 .widget-content::-webkit-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#FORM350 .widget-content:-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#FORM350 .widget-content::-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#FORM350 .widget-content:-ms-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM351 {
    display: block
}

#ITEM_FORM351>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #000;
    border-radius: 2px
}

#ITEM_FORM351 .widget-content::-webkit-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM351 .widget-content:-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM351 .widget-content::-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM351 .widget-content:-ms-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM351>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#ITEM_FORM352 {
    display: block
}

#ITEM_FORM352>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #000;
    border-radius: 2px
}

#ITEM_FORM352 .widget-content::-webkit-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM352 .widget-content:-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM352 .widget-content::-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM352 .widget-content:-ms-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM352>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#ITEM_FORM353 {
    display: block
}

#ITEM_FORM353>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #000;
    border-radius: 2px
}

#ITEM_FORM661>.widget-content,
#ITEM_FORM662>.widget-content,
#ITEM_FORM663>.widget-content {
    border-width: 1px;
    border-color: rgba(204, 204, 204, 1);
    border-style: solid
}

#ITEM_FORM353 .widget-content::-webkit-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM353 .widget-content:-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM353 .widget-content::-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM353 .widget-content:-ms-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM353>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#ITEM_FORM377 {
    display: block
}

#ITEM_FORM377>.widget-content {
    background-color: rgba(255, 255, 255, 1);
    color: #000;
    border-radius: 2px
}

#ITEM_FORM377 .widget-content::-webkit-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM377 .widget-content:-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM377 .widget-content::-moz-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM377 .widget-content:-ms-input-placeholder {
    color: rgba(117, 117, 117, 1)
}

#ITEM_FORM377>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON354>.widget-content {
    background-color: rgba(3, 169, 244, 1);
    color: #fff;
    font-weight: 700;
    line-height: 22px;
    border-radius: 5px
}

#FORM660>.widget-content,
#IMAGE379>.widget-content,
#PARAGRAPH640>.widget-content {
    color: rgba(0, 0, 0, 1);
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON354>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE379 {
    display: block
}

#IMAGE379>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#PARAGRAPH640 {
    display: block
}

#PARAGRAPH640>.widget-content {
    font-family: "Open Sans", sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400;
    line-height: 19px
}

#BUTTON664>.widget-content,
#HEADLINE658>.widget-content {
    font-family: Roboto, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#PARAGRAPH640>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#FORM660 {
    display: block
}

#FORM660 .widget-content::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#FORM660 .widget-content:-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#FORM660 .widget-content::-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#FORM660 .widget-content:-ms-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#FORM660>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#ITEM_FORM661 {
    display: block
}

#ITEM_FORM661>.widget-content {
    background-color: rgba(255, 255, 255, .32);
    color: rgba(0, 0, 0, 1)
}

#ITEM_FORM661 .widget-content::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM661 .widget-content:-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM661 .widget-content::-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM661 .widget-content:-ms-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM661>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#ITEM_FORM662 {
    display: block
}

#ITEM_FORM662>.widget-content {
    background-color: rgba(255, 255, 255, .32);
    color: rgba(0, 0, 0, 1)
}

#ITEM_FORM662 .widget-content::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM662 .widget-content:-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM662 .widget-content::-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM662 .widget-content:-ms-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM662>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#ITEM_FORM663 {
    display: block
}

#ITEM_FORM663>.widget-content {
    background-color: rgba(255, 255, 255, .32);
    color: rgba(0, 0, 0, 1)
}

#ITEM_FORM663 .widget-content::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM663 .widget-content:-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM663 .widget-content::-moz-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM663 .widget-content:-ms-input-placeholder {
    color: rgba(255, 255, 255, 1)
}

#ITEM_FORM663>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BUTTON664>.widget-content {
    background-color: rgba(3, 169, 244, 1);
    color: #fff;
    line-height: 40px;
    box-shadow: 0 2px 0 rgba(255, 255, 255, 1);
    border-radius: 0
}

#BUTTON664>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#SHAPE668>.ladi-widget-overlay,
#SHAPE668>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE668 {
    display: block
}

#SHAPE668>.widget-content {
    color: rgba(255, 255, 255, 1)
}

#BOX657 {
    display: block
}

#BOX657>.widget-content {
    background-color: rgba(3, 169, 244, 1);
    color: rgba(0, 0, 0, 1)
}

#BOX657>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE658>.ladi-widget-overlay,
#HEADLINE658>.widget-content,
#HEADLINE665>.widget-content,
#SHAPE659>.ladi-widget-overlay,
#SHAPE659>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE659 {
    display: block
}

#SHAPE659>.widget-content {
    color: rgba(255, 255, 255, 1)
}

#HEADLINE658 {
    display: block
}

#HEADLINE658>.widget-content {
    color: rgba(255, 255, 255, 1);
    line-height: 29px
}

#HEADLINE665>.widget-content,
#HEADLINE672>.widget-content {
    font-family: "Open Sans", sans-serif;
    line-height: 30px;
    
    -webkit-font-smoothing: antialiased;
    font-weight: 400
}

#HEADLINE665 {
    display: block
}

#HEADLINE665>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#SHAPE669>.widget-content,
#SHAPE671>.widget-content {
    color: rgba(255, 255, 255, 1);
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE665>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE669 {
    display: block
}

#SHAPE669>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE671 {
    display: block
}

#SHAPE671>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#HEADLINE672 {
    display: block
}

#HEADLINE672>.widget-content {
    background-color: rgba(255, 255, 255, 0);
    color: rgba(0, 0, 0, 1)
}

#HEADLINE672>.ladi-widget-overlay {
    background-color: rgba(255, 255, 255, 0)
}

#BOX369 {
    display: block
}

#BOX369>.widget-content {
    background-color: rgba(255, 250, 210, 1);
    color: rgba(0, 0, 0, 1);
    border-radius: 20px
}

#BOX369>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#IMAGE370>.ladi-widget-overlay,
#IMAGE370>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#IMAGE370 {
    display: block
}

#IMAGE370>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#BOX371 {
    display: block
}

#BOX371>.widget-content {
    background-image: url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg);
    background-color: rgba(19, 207, 168, 1);
    color: rgba(0, 0, 0, 1);
    background-origin: content-box;
    background-size: cover;
    background-attachment: scroll;
    background-position: top center;
    background-repeat: no-repeat;
    border-radius: 0 20px 20px 0
}

#BOX371>.ladi-widget-overlay {
    background-color: rgba(9, 181, 145, .73)
}

#BOX372 {
    display: block
}

#BOX372>.widget-content {
    background-color: rgba(72, 227, 195, 0);
    color: rgba(0, 0, 0, 1);
    border-radius: 50px;
    border-width: 2px;
    border-style: solid;
    border-color: rgba(255, 255, 255, 1)
}

#BOX372>.ladi-widget-overlay {
    background-color: rgba(0, 0, 0, 0)
}

#HEADLINE374>.ladi-widget-overlay,
#HEADLINE374>.widget-content,
#LINE376>.ladi-widget-overlay,
#LINE376>.widget-content,
#PARAGRAPH375>.ladi-widget-overlay,
#PARAGRAPH375>.widget-content,
#SHAPE373>.ladi-widget-overlay,
#SHAPE373>.widget-content {
    background-color: rgba(255, 255, 255, 0)
}

#SHAPE373 {
    display: block
}

#SHAPE373>.widget-content {
    color: rgba(255, 255, 255, 1)
}

#HEADLINE374 {
    display: block
}

#HEADLINE374>.widget-content {
    font-family: 'Open Sans', sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    line-height: 36px
}

#LINE376 {
    display: block
}

#LINE376>.widget-content .line {
    border-style: solid;
    border-color: rgba(255, 255, 255, 1);
    margin-top: 10.5px;
    border-width: 2px 0 0;
    border-width: 2px 0 0
}

#LINE376>.widget-content {
    color: rgba(0, 0, 0, 1)
}

#PARAGRAPH375 {
    display: block
}

#PARAGRAPH375>.widget-content {
    font-family: Montserrat, sans-serif;
    
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    line-height: 22px
}

@media(max-width:767px) {
    #POPUP212,
    #POPUP368,
    #SECTION171,
    #SECTION42,
    #SECTION472,
    #SECTION547,
    #SECTION735,
    #SECTION754,
    #SECTION9 {
        background-image: none
    }
    #SECTION341,
    #SECTION94 {
        background-size: cover;
        background-attachment: fixed
    }
    #POPUP656,
    #SECTION2,
    #SECTION502,
    #SECTION527 {
        background-origin: content-box;
        background-attachment: scroll;
        background-position: top left
    }
    #POPUP656,
    #SECTION2,
    #SECTION341,
    #SECTION502,
    #SECTION527,
    #SECTION94 {
        width: 100%;
        background-repeat: no-repeat
    }
    body {
        position: relative
    }
    #SECTION9 {
        width: 320px;
        height: 47px
    }
    #SECTION2 {
        height: 232.96px;
        background-image: linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg);
        background-image: -o-linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg);
        background-image: -ms-linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg);
        background-image: -moz-linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg);
        background-image: -webkit-linear-gradient(rgba(0, 0, 0, .25), rgba(0, 0, 0, .25)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg);
        background-size: cover
    }
    #SECTION507 {
        width: 100%;
        height: 266px;
        background-image: linear-gradient(rgba(0, 0, 0, .57), rgba(0, 0, 0, .57)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png);
        background-image: -o-linear-gradient(rgba(0, 0, 0, .57), rgba(0, 0, 0, .57)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png);
        background-image: -ms-linear-gradient(rgba(0, 0, 0, .57), rgba(0, 0, 0, .57)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png);
        background-image: -moz-linear-gradient(rgba(0, 0, 0, .57), rgba(0, 0, 0, .57)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png);
        background-image: -webkit-linear-gradient(rgba(0, 0, 0, .57), rgba(0, 0, 0, .57)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png);
        background-position: top center;
        background-repeat: repeat
    }
    #SECTION502 {
        height: 298.98px;
        background-image: linear-gradient(rgba(0, 0, 0, .49), rgba(0, 0, 0, .49)), url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg);
        background-image: -o-linear-gradient(rgba(0, 0, 0, .49), rgba(0, 0, 0, .49)), url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg);
        background-image: -ms-linear-gradient(rgba(0, 0, 0, .49), rgba(0, 0, 0, .49)), url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg);
        background-image: -moz-linear-gradient(rgba(0, 0, 0, .49), rgba(0, 0, 0, .49)), url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg);
        background-image: -webkit-linear-gradient(rgba(0, 0, 0, .49), rgba(0, 0, 0, .49)), url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg);
        background-size: cover
    }
    #SECTION527 {
        height: 326px;
        background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/untitled-3-1506079046658.jpg);
        background-size: cover
    }
    #SECTION472 {
        width: 100%;
        height: 481.17px
    }
    #SECTION735 {
        width: 100%;
        height: 708.92px
    }
    #SECTION754 {
        width: 100%;
        height: 1453.8px
    }
    #SECTION678 {
        width: 100%;
        height: 1128.8px;
        background-image: none
    }
    #SECTION42 {
        width: 100%;
        height: 617px
    }
    #SECTION547 {
        width: 100%;
        height: 544.92px
    }
    #POPUP212 {
        width: 100%;
        height: 100%
    }
    #POPUP212 .container {
        width: 100%;
        height: 402.5px;
        top: calc(100%-402.5px)
    }
    #SECTION94 {
        height: 826.33px;
        background-image: linear-gradient(rgba(242, 242, 242, .81), rgba(242, 242, 242, .81)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png);
        background-image: -o-linear-gradient(rgba(242, 242, 242, .81), rgba(242, 242, 242, .81)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png);
        background-image: -ms-linear-gradient(rgba(242, 242, 242, .81), rgba(242, 242, 242, .81)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png);
        background-image: -moz-linear-gradient(rgba(242, 242, 242, .81), rgba(242, 242, 242, .81)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png);
        background-image: -webkit-linear-gradient(rgba(242, 242, 242, .81), rgba(242, 242, 242, .81)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png);
        background-position: center top
    }
    #SECTION171 {
        width: 320px;
        height: 584.06px
    }
    #SECTION341 {
        height: 802.3px;
        background-image: linear-gradient(rgba(6, 13, 46, .4), rgba(6, 13, 46, .4)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png);
        background-image: -o-linear-gradient(rgba(6, 13, 46, .4), rgba(6, 13, 46, .4)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png);
        background-image: -ms-linear-gradient(rgba(6, 13, 46, .4), rgba(6, 13, 46, .4)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png);
        background-image: -moz-linear-gradient(rgba(6, 13, 46, .4), rgba(6, 13, 46, .4)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png);
        background-image: -webkit-linear-gradient(rgba(6, 13, 46, .4), rgba(6, 13, 46, .4)), url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png);
        background-position: center top
    }
    #POPUP656 {
        height: 100%;
        background-image: linear-gradient(rgba(0, 0, 0, .64), rgba(0, 0, 0, .64)), url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png);
        background-image: -o-linear-gradient(rgba(0, 0, 0, .64), rgba(0, 0, 0, .64)), url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png);
        background-image: -ms-linear-gradient(rgba(0, 0, 0, .64), rgba(0, 0, 0, .64)), url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png);
        background-image: -moz-linear-gradient(rgba(0, 0, 0, .64), rgba(0, 0, 0, .64)), url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png);
        background-image: -webkit-linear-gradient(rgba(0, 0, 0, .64), rgba(0, 0, 0, .64)), url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png);
        background-size: auto 100%
    }
    #POPUP656 .container {
        width: 375px;
        height: 466.5px;
        top: calc(100%-466.5px)
    }
    #POPUP368 {
        width: 100%;
        height: 100%
    }
    #POPUP368 .container {
        width: 375px;
        height: 527px;
        top: calc(100%-527px)
    }
    #SHAPE683,
    #SHAPE758 {
        top: 725.63px;
        left: 137.02px
    }
    #IMAGE187 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/logo-lakita-w-1506397011966.png)
    }
    #BOX684,
    #BOX687,
    #BOX692,
    #BOX741,
    #BOX759,
    #BOX762,
    #BOX772 {
        top: 0;
        width: 164px;
        height: 164px
    }
    #SHAPE683,
    #SHAPE686,
    #SHAPE691,
    #SHAPE743,
    #SHAPE758,
    #SHAPE761,
    #SHAPE766 {
        display: none!important;
        width: 35px;
        height: 35px
    }
    #SHAPE534,
    #SHAPE535,
    #SHAPE536 {
        width: 31.97px;
        height: 31.97px
    }
    #PARAGRAPH688,
    #PARAGRAPH763 {
        left: 1px;
        width: 301px;
        height: 38px
    }
    #HEADLINE736,
    #HEADLINE755 {
        height: 34px;
        top: 20px;
        width: 355px;
        padding: 0;
        left: 10px
    }
    #BOX283>.widget-content,
    #BOX480>.widget-content,
    #BOX684>.widget-content,
    #BOX687>.widget-content,
    #BOX692>.widget-content,
    #BOX741>.widget-content,
    #BOX759>.widget-content,
    #BOX762>.widget-content,
    #BOX772>.widget-content {
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat
    }
    #IMAGE187 {
        top: 12px;
        left: 13.5px;
        width: 84.44px;
        height: 25px
    }
    #HEADLINE513 {
        display: none!important;
        top: 19px;
        left: 104.5px;
        padding: 0;
        width: 180px;
        height: 17.98px
    }
    #HEADLINE513>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #HEADLINE514 {
        display: none!important;
        top: 54.97px;
        left: 105.48px;
        padding: 0;
        width: 157.98px;
        height: 17.98px
    }
    #HEADLINE514>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #HEADLINE515 {
        display: none!important;
        top: 103px;
        left: 87.5px;
        padding: 0;
        width: 200px;
        height: 17.98px
    }
    #HEADLINE515>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #LINEVERTICAL516 {
        display: none!important;
        top: 131px;
        left: 175px;
        width: 25px;
        height: 16.98px
    }
    #LINEVERTICAL517 {
        display: none!important;
        top: 158px;
        left: 175px;
        width: 25px;
        height: 17.98px
    }
    #LINEVERTICAL518 {
        display: none!important;
        top: 186px;
        left: 174.5px;
        width: 25px;
        height: 17.98px
    }
    #HEADLINE519 {
        display: none!important;
        top: 214px;
        left: 120.5px;
        padding: 0;
        width: 133.98px;
        height: 17.98px
    }
    #HEADLINE519>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #LINEVERTICAL520 {
        display: none!important;
        top: 242px;
        left: 175px;
        width: 25px;
        height: 17.98px
    }
    #HEADLINE524 {
        display: none!important;
        top: 270px;
        left: 87.5px;
        padding: 0;
        width: 200px;
        height: 17.98px
    }
    #HEADLINE524>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #PARAGRAPH4 {
        top: 195.98px;
        left: 10px;
        padding: 0;
        width: 355px;
        height: 26.97px
    }
    #PARAGRAPH4>.widget-content {
        font-size: 18px;
        text-align: center
    }
    #HEADLINE7 {
        top: 55px;
        left: 5px;
        padding: 0;
        width: 355px;
        height: 72px
    }
    #HEADLINE7>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #HEADLINE5 {
        top: 20px;
        left: 4px;
        padding: 0;
        width: 355px;
        height: 47.97px
    }
    #HEADLINE5>.widget-content {
        font-size: 28px;
        text-align: center;
        line-height: 48px
    }
    #BUTTON454 {
        top: 155.98px;
        left: 126.5px;
        padding: 0;
        width: 122px;
        height: 40px
    }
    #BUTTON454>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE509 {
        top: 20px;
        left: 5px;
        padding: 0;
        width: 355px;
        height: 35.97px
    }
    #HEADLINE509>.widget-content {
        font-size: 21px;
        text-align: center
    }
    #PARAGRAPH508 {
        top: 123.05px;
        left: 4px;
        padding: 0;
        width: 355px;
        height: 54px
    }
    #PARAGRAPH508>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #LINE526 {
        top: 103.97px;
        left: 10px;
        width: 355px;
        height: 25px
    }
    #BUTTON511 {
        top: 202.05px;
        left: 107.5px;
        padding: 0;
        width: 160px;
        height: 40px
    }
    #BUTTON511>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE510 {
        top: 55.98px;
        left: 5px;
        padding: 0;
        width: 355px;
        height: 47.97px
    }
    #HEADLINE510>.widget-content {
        font-size: 28px;
        text-align: center;
        line-height: 48px
    }
    #HEADLINE504 {
        top: 168.05px;
        left: 4px;
        padding: 0;
        width: 355px;
        height: 36px
    }
    #HEADLINE504>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #HEADLINE505 {
        top: 133.05px;
        left: 5px;
        padding: 0;
        width: 355px;
        height: 48px
    }
    #HEADLINE505>.widget-content {
        font-size: 30px;
        text-align: center;
        line-height: 48px
    }
    #BUTTON506 {
        top: 237.05px;
        left: 101.5px;
        padding: 0;
        width: 160px;
        height: 40px
    }
    #BUTTON506>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE525 {
        top: 7.05px;
        left: 97.5px;
        padding: 0;
        width: 250px;
        height: 126px
    }
    #HEADLINE525>.widget-content {
        font-size: 100px;
        text-align: left
    }
    #HEADLINE528 {
        top: 183.02px;
        left: 6.5px;
        padding: 0;
        width: 360px;
        height: 60.8px
    }
    #HEADLINE528>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #HEADLINE529 {
        top: 135.99px;
        left: 6px;
        padding: 0;
        width: 355px;
        height: 48px
    }
    #HEADLINE529>.widget-content {
        font-size: 30px;
        text-align: center;
        line-height: 48px
    }
    #BUTTON530 {
        top: 269.06px;
        left: 104.5px;
        padding: 0;
        width: 160px;
        height: 40px
    }
    #BUTTON530>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE531 {
        top: 20.98px;
        left: 100.5px;
        padding: 0;
        width: 249.97px;
        height: 105.97px
    }
    #HEADLINE531>.widget-content {
        font-size: 100px;
        text-align: left
    }
    #HEADLINE475 {
        top: 19.06px;
        left: 6.5px;
        padding: 0;
        width: 355px;
        height: 10px
    }
    #HEADLINE475>.widget-content {
        font-size: 20px;
        text-align: center;
        line-height: 6px
    }
    #HEADLINE476 {
        top: 297.52px;
        left: 6.5px;
        padding: 0;
        width: 355px;
        height: 25.59px
    }
    #HEADLINE476>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #HEADLINE477 {
        top: 192.45px;
        left: 96.14px;
        padding: 0;
        width: 182.69px;
        height: 15.44px
    }
    #HEADLINE477>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #BOX480 {
        top: 53.05px;
        left: 67.5px;
        width: 233.97px;
        height: 233.97px
    }
    #BOX480>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg)
    }
    #PARAGRAPH633 {
        top: 360.08px;
        left: 17.5px;
        padding: 0;
        width: 333px;
        height: 72px
    }
    #PARAGRAPH633>.widget-content {
        font-size: 12px;
        text-align: justify
    }
    #LINE634 {
        top: 346.97px;
        left: 10.5px;
        width: 355px;
        height: 25px
    }
    #HEADLINE673 {
        top: 322.97px;
        left: 6.5px;
        padding: 0;
        width: 355px;
        height: 24px
    }
    #HEADLINE673>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #HEADLINE736>.widget-content {
        font-size: 20px;
        text-align: center;
        line-height: 6px
    }
    #PARAGRAPH737 {
        top: 64px;
        left: 10px;
        padding: 0;
        width: 355px;
        height: 36px
    }
    #PARAGRAPH737>.widget-content {
        font-size: 15px;
        text-align: center;
        line-height: 18px
    }
    #BUTTON753 {
        top: 658.92px;
        left: 108px;
        padding: 0;
        width: 159px;
        height: 40px
    }
    #BUTTON753>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP773 {
        top: 110px;
        left: 37px;
        width: 301px;
        height: 498.92px
    }
    #BOX741 {
        left: 74px
    }
    #BOX741>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg)
    }
    #HEADLINE742 {
        top: 258.89px;
        left: 13px;
        padding: 0;
        width: 288px;
        height: 16px
    }
    #HEADLINE742>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE743 {
        top: 277.63px;
        left: 137px
    }
    #HEADLINE750 {
        top: 236.88px;
        left: 10.98px;
        padding: 0;
        width: 285px;
        height: 18px
    }
    #HEADLINE750>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #PARAGRAPH752 {
        top: 308.92px;
        left: 0;
        padding: 0;
        width: 301px;
        height: 190px
    }
    #PARAGRAPH752>.widget-content {
        font-size: 13px;
        text-align: justify;
        line-height: 18px
    }
    #HEADLINE755>.widget-content {
        font-size: 20px;
        text-align: center;
        line-height: 6px
    }
    #PARAGRAPH756 {
        top: 64px;
        left: 10px;
        padding: 0;
        width: 355px;
        height: 36px
    }
    #PARAGRAPH756>.widget-content {
        font-size: 15px;
        text-align: center;
        line-height: 18px
    }
    #BUTTON770 {
        top: 1375.97px;
        left: 115.5px;
        padding: 0;
        width: 159px;
        height: 40px
    }
    #BUTTON770>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP774 {
        top: 666.97px;
        left: 36px;
        width: 301px;
        height: 296px
    }
    #HEADLINE757 {
        top: 210.83px;
        left: 5px;
        padding: 0;
        width: 297px;
        height: 16px
    }
    #HEADLINE757>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #PARAGRAPH768 {
        top: 239px;
        left: 1px;
        padding: 0;
        width: 301px;
        height: 57px
    }
    #PARAGRAPH768>.widget-content {
        font-size: 13px;
        text-align: justify;
        line-height: 18px
    }
    #HEADLINE771 {
        top: 188.84px;
        left: 6px;
        padding: 0;
        width: 292px;
        height: 18px
    }
    #HEADLINE771>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX772 {
        left: 75px
    }
    #BOX772>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg)
    }
    #GROUP775 {
        top: 161.97px;
        left: 36px;
        width: 301px;
        height: 446.95px
    }
    #BOX759 {
        left: 75px
    }
    #BOX759>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg)
    }
    #HEADLINE760 {
        top: 206.92px;
        left: 14px;
        padding: 0;
        width: 288px;
        height: 16px
    }
    #HEADLINE760>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE761 {
        top: 277.63px;
        left: 137px
    }
    #HEADLINE767 {
        top: 184.91px;
        left: 11.98px;
        padding: 0;
        width: 285px;
        height: 18px
    }
    #HEADLINE767>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #PARAGRAPH763>.widget-content,
    #PARAGRAPH769>.widget-content {
        font-size: 13px;
        text-align: justify;
        line-height: 18px
    }
    #PARAGRAPH769 {
        top: 256.95px;
        left: 1px;
        padding: 0;
        width: 301px;
        height: 190px
    }
    #GROUP776 {
        top: 1040.97px;
        left: 35.02px;
        width: 301.98px;
        height: 300.81px
    }
    #BOX762 {
        left: 75.98px
    }
    #BOX762>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png)
    }
    #PARAGRAPH763 {
        top: 262.81px;
        padding: 0
    }
    #HEADLINE764 {
        top: 189.97px;
        left: 5.3px;
        padding: 0;
        width: 295px;
        height: 18px
    }
    #HEADLINE764>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE765 {
        top: 212.8px;
        left: 12.98px;
        padding: 0;
        width: 290px;
        height: 32px
    }
    #HEADLINE765>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE766 {
        top: 680.63px;
        left: 137.02px
    }
    #GROUP713 {
        top: 452.27px;
        left: 36px;
        width: 301px;
        height: 309.59px
    }
    #HEADLINE681 {
        top: 180.55px;
        left: 6px;
        padding: 0;
        width: 292px;
        height: 18px
    }
    #HEADLINE681>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE682 {
        top: 202.53px;
        left: 5px;
        padding: 0;
        width: 297px;
        height: 32px
    }
    #HEADLINE682>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #BOX692 {
        left: 75px
    }
    #BOX692>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/luu-tuan-anh-1506399328492.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/luu-tuan-anh-1506399328492.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/luu-tuan-anh-1506399328492.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/luu-tuan-anh-1506399328492.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/luu-tuan-anh-1506399328492.jpg)
    }
    #PARAGRAPH694 {
        top: 252.59px;
        left: 1px;
        padding: 0;
        width: 301px;
        height: 57px
    }
    #PARAGRAPH694>.widget-content {
        font-size: 13px;
        text-align: justify;
        line-height: 18px
    }
    #GROUP714 {
        top: 84.27px;
        left: 36px;
        width: 301px;
        height: 312.92px
    }
    #BOX684 {
        left: 75px
    }
    #BOX684>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/phamthihai2-1506399830311.png);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/phamthihai2-1506399830311.png);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/phamthihai2-1506399830311.png);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/phamthihai2-1506399830311.png);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/phamthihai2-1506399830311.png)
    }
    #HEADLINE685 {
        top: 205.89px;
        left: 14px;
        padding: 0;
        width: 288px;
        height: 32px
    }
    #HEADLINE685>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE686 {
        top: 277.63px;
        left: 137px
    }
    #HEADLINE693 {
        top: 183.88px;
        left: 11.98px;
        padding: 0;
        width: 285px;
        height: 18px
    }
    #HEADLINE693>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #PARAGRAPH688>.widget-content,
    #PARAGRAPH695>.widget-content {
        font-size: 13px;
        text-align: justify;
        line-height: 18px
    }
    #PARAGRAPH695 {
        top: 255.92px;
        left: 1px;
        padding: 0;
        width: 301px;
        height: 57px
    }
    #GROUP715 {
        top: 833.27px;
        left: 36px;
        width: 301px;
        height: 285.52px
    }
    #BOX687 {
        left: 75px
    }
    #BOX687>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihuyen1-1506399777238.png);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihuyen1-1506399777238.png);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihuyen1-1506399777238.png);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihuyen1-1506399777238.png);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihuyen1-1506399777238.png)
    }
    #PARAGRAPH688 {
        top: 247.52px;
        padding: 0
    }
    #HEADLINE689 {
        top: 174.64px;
        left: 4.3px;
        padding: 0;
        width: 295px;
        height: 18px
    }
    #HEADLINE689>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE690 {
        top: 197.47px;
        left: 11.98px;
        padding: 0;
        width: 290px;
        height: 16px
    }
    #HEADLINE690>.widget-content {
        font-size: 12px;
        text-align: center
    }
    #SHAPE691 {
        top: 680.63px;
        left: 137px
    }
    #HEADLINE43 {
        top: 20px;
        left: 10px;
        padding: 0;
        width: 355px;
        height: 30px
    }
    #HEADLINE43>.widget-content {
        font-size: 15px;
        text-align: center;
        line-height: 30px
    }
    #HEADLINE287 {
        top: 331px;
        left: 121.5px;
        padding: 0;
        width: 355px;
        height: 29.59px
    }
    #HEADLINE287>.widget-content {
        font-size: 15px;
        text-align: left
    }
    #PARAGRAPH285 {
        top: 384px;
        left: 67.5px;
        padding: 0;
        width: 355px;
        height: 24px
    }
    #PARAGRAPH285>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #LINE286 {
        top: 360.98px;
        left: 11.5px;
        width: 355px;
        height: 25px
    }
    #HEADLINE290 {
        top: 305.4px;
        left: 147.5px;
        padding: 0;
        width: 200px;
        height: 25.59px
    }
    #HEADLINE290>.widget-content {
        font-size: 15px;
        text-align: left
    }
    #HEADLINE532>.widget-content,
    #HEADLINE533>.widget-content {
        font-size: 12px;
        text-align: left
    }
    #HEADLINE532 {
        top: 418.27px;
        left: 67.5px;
        padding: 0;
        width: 285px;
        height: 96px
    }
    #HEADLINE533 {
        top: 538.27px;
        left: 67.5px;
        padding: 0;
        width: 294px;
        height: 48px
    }
    #SHAPE534 {
        top: 378.27px;
        left: 19.48px
    }
    #SHAPE535 {
        top: 410.25px;
        left: 20.47px
    }
    #SHAPE536 {
        top: 531.27px;
        left: 21.5px
    }
    #BOX283 {
        top: 69.27px;
        left: 81.98px;
        width: 210.97px;
        height: 206.97px
    }
    #BOX283>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png)
    }
    #BOX537 {
        top: 54px;
        left: 67px;
        width: 240.97px;
        height: 236.97px
    }
    #HEADLINE548 {
        top: 19.49px;
        left: 49.5px;
        padding: 0;
        width: 269px;
        height: 59.19px
    }
    #HEADLINE548>.widget-content {
        font-size: 15px;
        text-align: center;
        line-height: 30px
    }
    #LISTOP549 {
        top: 119.27px;
        left: 46.5px;
        width: 302px;
        height: 240px
    }
    #LISTOP549>.widget-content {
        font-size: 12px;
        text-align: justify
    }
    #LISTOP549>ol.widget-content li::before {
        content: counter(linum, disc);
        width: 30px;
        height: 30px;
        font-size: 15px;
        color: rgba(51, 51, 51, 1);
        margin-right: 0
    }
    #SHAPE566,
    #SHAPE567,
    #SHAPE568,
    #SHAPE569,
    #SHAPE570,
    #SHAPE571 {
        width: 17.97px;
        height: 16.97px
    }
    #LISTOP549>ol.widget-content li {
        margin-bottom: 10px
    }
    #LISTOP549>ol.widget-content li:last-child {
        margin-bottom: 0
    }
    #YOUTUBE550 {
        top: 366.27px;
        left: 8.5px;
        width: 355px;
        height: 177.22px
    }
    #SHAPE566 {
        top: 216.27px;
        left: 20.5px
    }
    #SHAPE567 {
        top: 305.95px;
        left: 21.5px
    }
    #SHAPE568 {
        top: 244.94px;
        left: 21.5px
    }
    #SHAPE569 {
        top: 184.97px;
        left: 21.5px
    }
    #SHAPE570 {
        top: 154.98px;
        left: 21.5px
    }
    #SHAPE571 {
        top: 124.27px;
        left: 21.5px
    }
    #PARAGRAPH216 {
        top: 94.5px;
        left: 10px;
        padding: 0;
        width: 355px;
        height: 288px
    }
    #PARAGRAPH216>.widget-content {
        font-size: 13px;
        text-align: left
    }
    #IMAGE675 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/popip2-1506090959037.png)
    }
    #BOX267,
    #BOX676 {
        top: 382.97px;
        height: 86.11px
    }
    #BOX229,
    #BOX243,
    #BOX275,
    #GROUP254,
    #GROUP282,
    #GROUP538 {
        width: 355px;
        height: 111px
    }
    #HEADLINE119,
    #HEADLINE230,
    #HEADLINE244,
    #HEADLINE250,
    #HEADLINE276 {
        height: 26.97px;
        width: 285px;
        top: 20px
    }
    #BUTTON205,
    #BUTTON232,
    #BUTTON246,
    #BUTTON251,
    #BUTTON278 {
        left: 108.5px;
        width: 136px;
        height: 40px
    }
    #HEADLINE120,
    #HEADLINE231,
    #HEADLINE245,
    #HEADLINE277 {
        left: 26px;
        height: 35.19px
    }
    #BOX218,
    #BOX233,
    #BOX247,
    #BOX253,
    #BOX279,
    #BOX777 {
        left: 118px;
        width: 119px;
        height: 116px;
        display: none!important
    }
    #HEADLINE174,
    #HEADLINE179,
    #HEADLINE184 {
        height: 24px;
        left: 1px;
        top: 0
    }
    #PARAGRAPH180,
    #PARAGRAPH185 {
        top: 41px;
        padding: 0;
        height: 60px
    }
    #LINE193,
    #LINE195,
    #LINE196 {
        top: 16px;
        height: 25px
    }
    #BOX218>.widget-content,
    #BOX233>.widget-content,
    #BOX247>.widget-content,
    #BOX253>.widget-content,
    #BOX267>.widget-content,
    #BOX279>.widget-content,
    #BOX676>.widget-content,
    #BOX777>.widget-content {
        background-position: top center;
        background-size: cover;
        background-origin: content-box;
        background-attachment: scroll;
        background-repeat: no-repeat
    }
    #IMAGE675 {
        display: none!important;
        top: -149.03px;
        left: 0;
        width: 1005px;
        height: 474px
    }
    #GROUP248 {
        top: 307.45px;
        left: 8.5px;
        width: 355px;
        height: 94px
    }
    #BOX249 {
        top: 0;
        left: 1px;
        width: 355px;
        height: 94px
    }
    #HEADLINE250 {
        left: 35px;
        padding: 0
    }
    #HEADLINE250>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #BUTTON251 {
        display: none!important;
        top: 103px;
        padding: 0
    }
    #BUTTON251>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE252 {
        top: 57px;
        left: 26px;
        padding: 0;
        width: 302.97px;
        height: 17.59px
    }
    #HEADLINE252>.widget-content {
        font-size: 15px;
        text-align: left;
        line-height: 18px
    }
    #BOX253 {
        top: 515.77px
    }
    #BOX253>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg)
    }
    #GROUP262 {
        top: 614.44px;
        left: 8.5px;
        width: 355px;
        height: 124.69px
    }
    #BOX267 {
        display: none!important;
        left: 118px;
        width: 119px
    }
    #BOX267>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg)
    }
    #BOX263 {
        top: 0;
        left: 1px;
        width: 355px;
        height: 124.69px
    }
    #HEADLINE264 {
        top: 14.85px;
        left: 35px;
        padding: 0;
        width: 285px;
        height: 20px
    }
    #HEADLINE264>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #BUTTON265 {
        display: none!important;
        top: 75.9px;
        left: 108px;
        padding: 0;
        width: 136px;
        height: 29.69px
    }
    #BUTTON265>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE266 {
        top: 42.32px;
        left: 26px;
        padding: 0;
        width: 302.97px;
        height: 26.11px
    }
    #HEADLINE266>.widget-content {
        font-size: 15px;
        text-align: left;
        line-height: 18px
    }
    #BOX676 {
        display: none!important;
        left: 118px;
        width: 119px
    }
    #BOX676>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg)
    }
    #GROUP282 {
        top: 506.44px;
        left: 8.5px
    }
    #BOX275 {
        top: 0;
        left: 1px
    }
    #HEADLINE276 {
        left: 35px;
        padding: 0
    }
    #HEADLINE276>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #HEADLINE277 {
        top: 57px;
        padding: 0;
        width: 302.97px
    }
    #HEADLINE277>.widget-content {
        font-size: 15px;
        text-align: left;
        line-height: 18px
    }
    #BUTTON278 {
        display: none!important;
        top: 103px;
        padding: 0
    }
    #BUTTON278>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX279 {
        top: 515.77px
    }
    #BOX279>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg)
    }
    #GROUP453 {
        top: 93.45px;
        left: 8.5px;
        width: 355px;
        height: 109px
    }
    #BOX218 {
        top: 483.77px
    }
    #BOX218>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg)
    }
    #BOX118 {
        top: 0;
        left: 1px;
        width: 355px;
        height: 109px
    }
    #HEADLINE119 {
        left: 21px;
        padding: 0
    }
    #HEADLINE119>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #HEADLINE120 {
        top: 56.98px;
        padding: 0;
        width: 303px
    }
    #HEADLINE120>.widget-content {
        font-size: 15px;
        text-align: left;
        line-height: 18px
    }
    #BUTTON205 {
        display: none!important;
        top: 102.98px;
        padding: 0
    }
    #BUTTON205>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX777 {
        top: 483.77px
    }
    #BOX777>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg)
    }
    #BUTTON471 {
        top: 758.45px;
        left: 86.5px;
        padding: 0;
        width: 188px;
        height: 38px
    }
    #BUTTON471>.widget-content {
        font-size: 20px;
        text-align: center
    }
    #GROUP254 {
        top: 398.44px;
        left: 8.5px
    }
    #BOX243 {
        top: 0;
        left: 1px
    }
    #HEADLINE244 {
        left: 36px;
        padding: 0
    }
    #HEADLINE244>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #HEADLINE245 {
        top: 57px;
        padding: 0;
        width: 302.97px
    }
    #HEADLINE245>.widget-content {
        font-size: 15px;
        text-align: left;
        line-height: 18px
    }
    #BUTTON246 {
        display: none!important;
        top: 103px;
        padding: 0
    }
    #BUTTON246>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #BOX247 {
        top: 515.77px
    }
    #BOX247>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg)
    }
    #HEADLINE213 {
        top: 70.5px;
        left: 10px;
        padding: 0;
        width: 355px;
        height: 30px
    }
    #HEADLINE213>.widget-content {
        font-size: 15px;
        text-align: left
    }
    #HEADLINE95 {
        top: 20px;
        left: 13.5px;
        padding: 0;
        width: 348px;
        height: 34px
    }
    #HEADLINE95>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #GROUP538 {
        top: 199.45px;
        left: 8.5px
    }
    #BOX229 {
        top: 0;
        left: 1px
    }
    #HEADLINE230 {
        left: 35px;
        padding: 0
    }
    #HEADLINE230>.widget-content {
        font-size: 20px;
        text-align: left
    }
    #BUTTON232 {
        display: none!important;
        top: 103px;
        padding: 0
    }
    #BUTTON232>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #HEADLINE231 {
        top: 57px;
        padding: 0;
        width: 302.97px
    }
    #HEADLINE231>.widget-content {
        font-size: 15px;
        text-align: left;
        line-height: 18px
    }
    #BOX233 {
        top: 515.77px
    }
    #BOX233>.widget-content {
        background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg);
        background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg);
        background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg);
        background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg);
        background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg)
    }
    #GROUP449 {
        top: 442.34px;
        left: 42.5px;
        width: 285px;
        height: 121px
    }
    #LINE193 {
        left: 21px;
        width: 246.97px
    }
    #HEADLINE174 {
        padding: 0;
        width: 285px
    }
    #HEADLINE174>.widget-content {
        font-size: 18px;
        text-align: center;
        line-height: 18px
    }
    #PARAGRAPH175 {
        top: 41px;
        left: 21px;
        padding: 0;
        width: 247px;
        height: 80px
    }
    #PARAGRAPH175>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP450 {
        top: 259.34px;
        left: 44.5px;
        width: 285px;
        height: 101px
    }
    #LINE195 {
        left: 18px;
        width: 249.97px
    }
    #HEADLINE179 {
        padding: 0;
        width: 285px
    }
    #HEADLINE179>.widget-content {
        font-size: 18px;
        text-align: center;
        line-height: 18px
    }
    #PARAGRAPH180 {
        left: 38px;
        width: 211px
    }
    #PARAGRAPH180>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #GROUP451 {
        top: 78.34px;
        left: 61.5px;
        width: 250px;
        height: 101px
    }
    #LINE196 {
        left: 1px;
        width: 249.97px
    }
    #HEADLINE184 {
        padding: 0;
        width: 250px
    }
    #HEADLINE184>.widget-content {
        font-size: 18px;
        text-align: center;
        line-height: 18px
    }
    #PARAGRAPH185 {
        left: 14px;
        width: 228px
    }
    #PARAGRAPH185>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #SHAPE181 {
        top: 179.34px;
        left: 161.5px;
        width: 50.59px;
        height: 92px
    }
    #IMAGE201 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png)
    }
    #IMAGE201 {
        top: 329.34px;
        left: 495.5px;
        width: 79px;
        height: 79px
    }
    #SHAPE176 {
        top: 360.34px;
        left: 165.5px;
        width: 50.59px;
        height: 92px
    }
    #IMAGE198 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png)
    }
    #IMAGE198 {
        top: 425.34px;
        left: -174.5px;
        width: 80px;
        height: 80px
    }
    #SHAPE186 {
        top: -1px;
        left: 159.5px;
        width: 50.59px;
        height: 92px
    }
    #IMAGE197 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png)
    }
    #HEADLINE438,
    #HEADLINE636,
    #HEADLINE637 {
        width: 355px;
        padding: 0
    }
    #SHAPE431,
    #SHAPE432,
    #SHAPE434 {
        width: 116.89px;
        height: 98.69px
    }
    #BOX439,
    #BOX440,
    #GROUP452 {
        height: 61.97px
    }
    #ITEM_FORM351,
    #ITEM_FORM352,
    #ITEM_FORM353 {
        height: 35.63px;
        left: 0;
        width: 314.63px
    }
    #IMAGE197 {
        top: 14.34px;
        left: 471.5px;
        width: 79px;
        height: 79px
    }
    #GROUP437 {
        top: 171px;
        left: -1px;
        width: 375.81px;
        height: 99.97px
    }
    #SHAPE431 {
        top: 0;
        left: 174.5px
    }
    #SHAPE434 {
        top: .69px;
        left: 88.5px
    }
    #SHAPE430 {
        top: .2px;
        left: 261px;
        width: 115.81px;
        height: 97.8px
    }
    #SHAPE432 {
        top: 1.28px;
        left: 1px
    }
    #COUNTDOWN4355 {
        top: 15.28px;
        left: 12.5px;
        width: 357px;
        height: 27px
    }
    #COUNTDOWN4355>.widget-content {
        font-size: 70px
    }
    #HEADLINE438 {
        top: 20px;
        left: 10px;
        height: 35.19px
    }
    #HEADLINE438>.widget-content {
        font-size: 15px;
        text-align: center;
        line-height: 18px
    }
    #HEADLINE499 {
        top: 137.6px;
        left: 121.48px;
        padding: 0;
        width: 217.97px;
        height: 33.31px
    }
    #HEADLINE499>.widget-content {
        font-size: 15px;
        text-align: left
    }
    #LINE500 {
        top: 146.6px;
        left: 46.48px;
        width: 65.97px;
        height: 25px
    }
    #LINE501 {
        top: 145.93px;
        left: 246.48px;
        width: 66.97px;
        height: 25px
    }
    #HEADLINE636 {
        top: 622.31px;
        left: 0;
        height: 25.59px
    }
    #HEADLINE636>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #HEADLINE637 {
        top: 117.18px;
        left: 52.5px;
        height: 29.59px
    }
    #HEADLINE637>.widget-content {
        font-size: 15px;
        text-align: left
    }
    #GROUP452 {
        top: 55.2px;
        left: 9px;
        width: 383.5px
    }
    #BOX439 {
        top: 0;
        left: 1px;
        width: 342.97px
    }
    #BOX440 {
        top: 0;
        left: 0;
        width: 170.97px
    }
    #HEADLINE441 {
        top: 9px;
        left: 27px;
        padding: 0;
        width: 140px;
        height: 40px
    }
    #HEADLINE441>.widget-content {
        font-size: 34px;
        text-align: center
    }
    #HEADLINE444 {
        top: 11.1px;
        left: 184.5px;
        padding: 0;
        width: 200px;
        height: 40.97px
    }
    #HEADLINE444>.widget-content {
        font-size: 35px;
        text-align: left
    }
    #BOX349 {
        top: 269.94px;
        left: 11.18px;
        width: 347px;
        height: 336px
    }
    #HEADLINE355 {
        top: 97px;
        left: 9px;
        padding: 0;
        width: 330px;
        height: 33.97px
    }
    #HEADLINE355>.widget-content {
        font-size: 26px;
        text-align: center;
        line-height: 34px
    }
    #FORM350>.widget-content,
    #ITEM_FORM351>.widget-content,
    #ITEM_FORM352>.widget-content,
    #ITEM_FORM353>.widget-content {
        font-size: 13px
    }
    #HEADLINE356 {
        top: 141px;
        left: 9px;
        padding: 0;
        width: 330px;
        height: 47.97px
    }
    #HEADLINE356>.widget-content {
        font-size: 13px;
        text-align: center;
        line-height: 48px
    }
    #FORM350 {
        top: 83.52px;
        left: 15px;
        width: 314.63px;
        height: 179.88px
    }
    #ITEM_FORM351 {
        top: 0
    }
    #ITEM_FORM352 {
        top: 45.64px
    }
    #ITEM_FORM353 {
        top: 91.28px
    }
    #ITEM_FORM377 {
        top: 136.92px;
        left: 0;
        width: 314.63px;
        height: 32.97px
    }
    #BUTTON354 {
        top: 273.43px;
        left: 55.83px;
        padding: 0;
        width: 232px;
        height: 40px
    }
    #BUTTON354>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #IMAGE379 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/logo-lakita-w-1506397011966.png)
    }
    #ITEM_FORM661,
    #ITEM_FORM662,
    #ITEM_FORM663 {
        width: 300px;
        height: 44.02px;
        left: 0
    }
    #SHAPE668,
    #SHAPE671 {
        width: 26px;
        height: 26px
    }
    #IMAGE379 {
        top: 10.63px;
        left: 61px;
        width: 215.34px;
        height: 66.97px
    }
    #PARAGRAPH640 {
        top: 682.48px;
        left: 5.5px;
        padding: 0;
        width: 355px;
        height: 92px
    }
    #PARAGRAPH640>.widget-content {
        font-size: 10px;
        text-align: center
    }
    #FORM660>.widget-content,
    #ITEM_FORM661>.widget-content,
    #ITEM_FORM662>.widget-content,
    #ITEM_FORM663>.widget-content {
        font-size: 14px
    }
    #FORM660 {
        top: 243.18px;
        left: 29.5px;
        width: 300px;
        height: 157.07px
    }
    #ITEM_FORM661 {
        top: -1.83105e-05px
    }
    #ITEM_FORM662 {
        top: 55.08px
    }
    #ITEM_FORM663 {
        top: 113.08px
    }
    #BUTTON664 {
        top: 412.2px;
        left: 85.5px;
        padding: 0;
        width: 175px;
        height: 40px
    }
    #BUTTON664>.widget-content {
        font-size: 14px;
        text-align: center
    }
    #SHAPE668 {
        top: 89.25px;
        left: 11.5px
    }
    #BOX657 {
        top: -1.25px;
        left: -.5px;
        width: 375px;
        height: 52px
    }
    #SHAPE659 {
        display: none!important;
        top: 92px;
        left: 166.5px;
        width: 50px;
        height: 50px
    }
    #HEADLINE658 {
        top: 15px;
        left: .5px;
        padding: 0;
        width: 375px;
        height: 28.8px
    }
    #HEADLINE658>.widget-content {
        font-size: 15px;
        text-align: center
    }
    #HEADLINE665 {
        top: 88.25px;
        left: 43.5px;
        padding: 0;
        width: 417px;
        height: 148px
    }
    #HEADLINE665>.widget-content {
        font-size: 10px;
        text-align: left
    }
    #SHAPE669 {
        top: 147.2px;
        left: 11px;
        width: 27px;
        height: 27px
    }
    #SHAPE671 {
        top: 179.2px;
        left: 11px
    }
    #HEADLINE672 {
        top: 51.23px;
        left: 10px;
        padding: 0;
        width: 355px;
        height: 29.6px
    }
    #HEADLINE672>.widget-content {
        font-size: 9px;
        text-align: center
    }
    #BOX369 {
        top: 20px;
        left: 10px;
        width: 355px;
        height: 487px
    }
    #IMAGE370 .widget-content:first-child .lp-show-image:first-child {
        width: 100%;
        height: 100%;
        background-position: center center;
        background-size: cover;
        background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/phong-2.png)
    }
    #IMAGE370 {
        top: 297px;
        left: 78.83px;
        width: 197.34px;
        height: 163px
    }
    #BOX371 {
        top: 20px;
        left: 0;
        width: 355px;
        height: 267px
    }
    #BOX371>.widget-content {
        background-image: linear-gradient(rgba(9, 181, 145, .73), rgba(9, 181, 145, .73)), url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg);
        background-image: -o-linear-gradient(rgba(9, 181, 145, .73), rgba(9, 181, 145, .73)), url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg);
        background-image: -ms-linear-gradient(rgba(9, 181, 145, .73), rgba(9, 181, 145, .73)), url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg);
        background-image: -moz-linear-gradient(rgba(9, 181, 145, .73), rgba(9, 181, 145, .73)), url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg);
        background-image: -webkit-linear-gradient(rgba(9, 181, 145, .73), rgba(9, 181, 145, .73)), url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg);
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat
    }
    #BOX372 {
        top: 20px;
        left: 146px;
        width: 63px;
        height: 63px
    }
    #SHAPE373 {
        top: 12px;
        left: 14px;
        width: 36px;
        height: 36px
    }
    #HEADLINE374 {
        top: 99.95px;
        left: 6.5px;
        padding: 0;
        width: 334px;
        height: 36px
    }
    #HEADLINE374>.widget-content {
        font-size: 30px;
        text-align: center;
        line-height: 30px
    }
    #LINE376 {
        top: 133px;
        left: 145.5px;
        width: 64px;
        height: 25px
    }
    #PARAGRAPH375 {
        top: 173.91px;
        left: 34.5px;
        padding: 0;
        width: 286px;
        height: 60px
    }
    #PARAGRAPH375>.widget-content {
        font-size: 14px;
        text-align: center;
        line-height: 20px
    }
}

.carousel-indicators .active {
    background-color: #1f611e;
}

.carousel-indicators li {
    border: 1px solid #368831;
}

</style>