//https://intexsoft.com/blog/introduction-to-3d-three-js-basics/

var scene = new THREE.Scene();
var frontSpot = new THREE.SpotLight(0xeeeece);
frontSpot.position.set(1000, 1000, 1000);
scene.add(frontSpot);
var frontSpot2 = new THREE.SpotLight(0xddddce);
frontSpot2.position.set(-300, -300, -300);
scene.add(frontSpot2);
var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

var renderer = new THREE.WebGLRenderer();
renderer = new THREE.WebGLRenderer( { alpha: true } );  //fond transparent
renderer.setClearColor( 0xffffff, 0 );                  // fond transparent
renderer.setSize( window.innerWidth, window.innerHeight );
document.body.appendChild( renderer.domElement );

var geometry = new THREE.TorusGeometry( 10, 3, 20, 100 );
var material = new THREE.MeshPhongMaterial( {
color: 0xFEBFD2,
specular: 0xbcbcbc,
 } );
var mesh = new THREE.Mesh( geometry, material );
scene.add( mesh );

camera.position.z = 50;

function render() {
  requestAnimationFrame( render )
  mesh.rotation.y += 0.01;
  mesh.rotation.z += 0.01;
  renderer.render( scene, camera );
}
render();