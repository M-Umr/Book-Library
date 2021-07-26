import { VctrApi } from "https://www.vectary.com/viewer-api/v1/api.js";

let vctrApi;

async function run() {


function errHandler(err) {
console.log("API error", err);
}

function vectorsDistance(v1, v2) {
return Math.sqrt(
Math.pow(v1[0] - v2[0], 2) +
Math.pow(v1[1] - v2[1], 2) +
Math.pow(v1[2] - v2[2], 2));
}

async function onReady() {
console.log("API ready..");


const startPosition = [0, 0, 0];
const startRotation = [0, 0.0004, 0.0002];
const origin = [0, 0.1, 0];
const startPosition1 = [0.5, 0.5, 0.5];
const origin1=[0,0,0];
const startRotation1 = [0,0.004,0.002];

try {
console.log(await vctrApi.getObjects());

 

} catch (e) {
errHandler(e);
}

const r = vectorsDistance(startPosition, origin);

const r1 = vectorsDistance(startPosition1, origin1);

const runAnimation = () => {
VctrApi.Utils.animate(
10000,
animationDelta => animationDelta,
animationDelta => {
const theta = 2 * Math.PI * animationDelta;
const posX = r * Math.cos(theta);
const posZ = r1 * Math.cos(theta);

vctrApi.setPositionAbsolute("limec", [posX,origin[1]]);
vctrApi.setPositionAbsolute("stul", [posX,origin[1]]);

vctrApi.setPositionAbsolute("stojan", [origin[0],origin[0],posX]);
//vctrApi.setPositionAbsolute("vretenik", [posZ,origin[0],posZ]);


//vctrApi.setPositionAbsolute("vretenik", [origin[0],posX]);
vctrApi.setPositionAbsolute("vretenik", [origin[0],origin[0],posX]);




vctrApi.setRotationRelative("stul", [0, 0, 2]);
vctrApi.setRotationRelative("vretenik", [0,0,0]);

},
() => {

runAnimation();
}
)
};

runAnimation();
}

vctrApi = new VctrApi("wft11", errHandler);
try {
await vctrApi.init();
} catch (e) {
errHandler(e);
}

onReady();
}

run();