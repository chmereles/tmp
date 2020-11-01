
 body {
            line-height: 1.3em;
            min-width: 920px;
        }

        .history-tl-container {
            font-family: "Roboto", sans-serif;
            width: 50%;
            margin: auto;
            display: block;
            position: relative;
        }

        .history-tl-container ul.tl {
            margin: 20px 0;
            padding: 0;
            display: inline-block;

        }

        .history-tl-container ul.tl li {
            list-style: none;
            margin: auto;
            margin-left: 200px;
            min-height: 50px;
            /*background: rgba(255,255,0,0.1);*/
            border-left: 1px dashed #86D6FF;
            padding: 0 0 50px 30px;
            position: relative;
        }

        .history-tl-container ul.tl li:last-child {
            border-left: 0;
        }

        .history-tl-container ul.tl li::before {
            position: absolute;
            left: -18px;
            top: -5px;
            content: " ";
            border: 8px solid rgba(255, 255, 255, 0.74);
            border-radius: 500%;
            background: #258CC7;
            height: 20px;
            width: 20px;
            transition: all 500ms ease-in-out;

        }

        .history-tl-container ul.tl li:hover::before {
            border-color: #258CC7;
            transition: all 1000ms ease-in-out;
        }

        ul.tl li .item-title {}

        ul.tl li .item-detail {
            color: rgba(0, 0, 0, 0.5);
            font-size: 12px;
        }

        ul.tl li .timestamp {
            color: #8D8D8D;
            position: absolute;
            width: 100px;
            left: -50%;
            text-align: right;
            font-size: 12px;
        }
        
<!-- time line -->
 <div class="history-tl-container">
            <ul class="tl">
                <li class="tl-item" ng-repeat="item in retailer_history">
                    <div class="timestamp">
                        3rd March 2015<br> 7:00 PM
                    </div>
                    <div class="item-title">Start from Shire</div>
                    <div class="item-detail">Don't forget the ring</div>
                </li>
                <li class="tl-item" ng-repeat="item in retailer_history">
                    <div class="timestamp">
                        19th March 2015<br> 3:00 PM
                    </div>
                    <div class="item-title">Kill some Orcs</div>
                    <div class="item-detail">Don't enter the caves!!</div>
                </li>
                <li class="tl-item" ng-repeat="item in retailer_history">
                    <div class="timestamp">
                        1st June 2015<br> 7:00 PM
                    </div>
                    <div class="item-title">Throw that goddamn ring in the lava</div>
                    <div class="item-detail">Also, throw that Gollum too</div>
                </li>

            </ul>
        </div>
        <!-- end time line -->