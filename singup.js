let rp = gsap.timeline();
rp.from("header , .logo, .item1 a, .cont> h3", {
  y: -40,
  opacity: 0,
  duration: .5,
  stagger: 0.2,
});
rp.from("#contact h1 , #contact  p", {
  y: -20,
  opacity: 0,
  duration: .1,
  // stagger: 0.2,
});
rp.from(".box h1 ,.box h2",{
    y: -20,
    opacity: 0,
    duration: .2,
    stagger: 0.2,
})
rp.from(".left label , .left input , .left #country, .left select", {
  x: -30,
  opacity: 0,
  duration: .2,
  // stagger: 0.5,
});
rp.from(".right label , .right input , .right #country ,.right textarea ", {
  x: 30,
  opacity: 0,
  duration: .2,
  // stagger: 0.5,
});

rp.from("button", {
  y: -20,
  opacity: 0,
  duration: .2,
  // stagger: 0.2,
});