<style>
 .coin {
  position: relative;
  width: 300px;
  height: 300px;
  margin: auto;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-animation: rotate3d 8s linear infinite;
          animation: rotate3d 8s linear infinite;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.coin__front,
.coin__back {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  overflow: hidden;
  background-color: #c57b28;
}
.coin__front:after,
.coin__back:after {
  content: "";
  position: absolute;
  left: -150px;
  bottom: 100%;
  display: block;
  height: 200px;
  width: 600px;
  background: #fff;
  opacity: 0.3;
  -webkit-animation: shine linear 4s infinite;
          animation: shine linear 4s infinite;
}

.coin__front {
  background-image: url("imgs/coin.png");
  background-size: 150%;
  background-position: center;
  -webkit-transform: translateZ(10px);
          transform: translateZ(10px);
}

.coin__back {
  background-image: url("imgs/coin.png");
  background-size: 150%;
  background-position: center;
  -webkit-transform: translateZ(-10px) rotateY(180deg);
          transform: translateZ(-10px) rotateY(180deg);
}

.coin__edge div:nth-child(1) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(94.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(94.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(2) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(99deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(99deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(3) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(103.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(103.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(4) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(108deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(108deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(5) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(112.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(112.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(6) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(117deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(117deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(7) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(121.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(121.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(8) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(126deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(126deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(9) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(130.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(130.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(10) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(135deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(135deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(11) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(139.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(139.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(12) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(144deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(144deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(13) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(148.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(148.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(14) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(153deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(153deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(15) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(157.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(157.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(16) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(162deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(162deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(17) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(166.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(166.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(18) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(171deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(171deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(19) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(175.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(175.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(20) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(180deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(180deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(21) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(184.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(184.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(22) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(189deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(189deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(23) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(193.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(193.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(24) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(198deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(198deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(25) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #6d410d;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(202.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(202.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(26) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #71440e;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(207deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(207deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(27) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #79490f;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(211.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(211.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(28) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #885212;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(216deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(216deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(29) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #945a14;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(220.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(220.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(30) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #9c5f16;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(225deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(225deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(31) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #a76618;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(229.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(229.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(32) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #b16c18;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(234deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(234deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(33) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #b7711c;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(238.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(238.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(34) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b20;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(243deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(243deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(35) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b22;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(247.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(247.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(36) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b24;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(252deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(252deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(37) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b24;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(256.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(256.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(38) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b26;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(261deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(261deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(39) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b28;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(265.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(265.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(40) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b28;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(270deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(270deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(41) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b28;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(274.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(274.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(42) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b26;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(279deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(279deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(43) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b24;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(283.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(283.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(44) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b24;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(288deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(288deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(45) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b22;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(292.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(292.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(46) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #c57b20;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(297deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(297deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(47) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #b7711c;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(301.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(301.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(48) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #b16c18;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(306deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(306deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(49) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #a76618;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(310.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(310.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(50) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #9c5f16;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(315deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(315deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(51) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #945a14;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(319.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(319.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(52) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #885212;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(324deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(324deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(53) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #79490f;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(328.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(328.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(54) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #71440e;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(333deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(333deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(55) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #6d410d;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(337.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(337.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(56) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(342deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(342deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(57) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(346.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(346.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(58) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(351deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(351deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(59) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(355.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(355.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(60) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(360deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(360deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(61) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(364.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(364.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(62) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(369deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(369deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(63) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(373.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(373.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(64) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(378deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(378deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(65) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(382.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(382.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(66) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(387deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(387deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(67) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(391.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(391.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(68) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(396deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(396deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(69) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(400.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(400.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(70) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(405deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(405deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(71) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(409.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(409.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(72) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(414deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(414deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(73) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(418.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(418.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(74) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(423deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(423deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(75) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(427.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(427.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(76) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(432deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(432deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(77) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(436.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(436.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(78) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(441deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(441deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(79) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(445.5deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(445.5deg) translateX(150px) rotateY(90deg);
}
.coin__edge div:nth-child(80) {
  position: absolute;
  height: 11.775px;
  width: 20px;
  background: #633B0C;
  -webkit-transform: translateY(144.1125px) translateX(140px) rotateZ(450deg) translateX(150px) rotateY(90deg);
          transform: translateY(144.1125px) translateX(140px) rotateZ(450deg) translateX(150px) rotateY(90deg);
}

.coin__shadow {
  position: absolute;
  width: 300px;
  height: 20px;
  border-radius: 50%;
  background: rgba(255,255,255,0.3);
  box-shadow: 0 0 100px 100px rgba(255,255,255,0.3);
  opacity: 0.125;
  -webkit-transform: rotateX(90deg) translateZ(-330px) scale(0.5);
          transform: rotateX(90deg) translateZ(-330px) scale(0.5);
}

@-webkit-keyframes rotate3d {
  0% {
    -webkit-transform: perspective(1000px) rotateY(0deg);
            transform: perspective(1000px) rotateY(0deg);
  }
  100% {
    -webkit-transform: perspective(1000px) rotateY(360deg);
            transform: perspective(1000px) rotateY(360deg);
  }
}

@keyframes rotate3d {
  0% {
    -webkit-transform: perspective(1000px) rotateY(0deg);
            transform: perspective(1000px) rotateY(0deg);
  }
  100% {
    -webkit-transform: perspective(1000px) rotateY(360deg);
            transform: perspective(1000px) rotateY(360deg);
  }
}
@-webkit-keyframes shine {
  0%, 15% {
    -webkit-transform: translateY(600px) rotate(-40deg);
            transform: translateY(600px) rotate(-40deg);
  }
  50% {
    -webkit-transform: translateY(-300px) rotate(-40deg);
            transform: translateY(-300px) rotate(-40deg);
  }
}
@keyframes shine {
  0%, 15% {
    -webkit-transform: translateY(600px) rotate(-40deg);
            transform: translateY(600px) rotate(-40deg);
  }
  50% {
    -webkit-transform: translateY(-300px) rotate(-40deg);
            transform: translateY(-300px) rotate(-40deg);
  }
}
.coin__edge_image {
  /* background-image: url(https://placedog.net/540/205); */
}

  
</style>
<div class="coin">
  <div class="coin__front"></div>
  <div class="coin__edge">
    <div class="coin__edge_image"></div><div class="coin__edge_image"></div><div class="coin__edge_image"></div><div class="coin__edge_image"></div><div class="coin__edge_image"></div><div class="coin__edge_image"></div><div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
     <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>

  </div>
  <div class="coin__back"></div>
  <div class="coin__shadow"></div>
</div>