// enable double-clicking from Finder/Explorer (CS2 and higher)
#target photoshop
app.bringToFront();

var thisFile = new File($.fileName);

// process the folder this file is in
var basePath = thisFile.path;
var dir = basePath;

function processPSD(file) {
  // filename = file.name.split('.psd');
  // category = filename[0].split('tpl-');
  // category = category[1];

  var doc = open(file); 
  // change the color mode to RGB.
  //Important for resizing GIFs with indexed colors, to get better results
  doc.changeMode(ChangeMode.RGB); 

  // our web export options
  var options = new ExportOptionsSaveForWeb();
  options.quality = 100;
  options.format = SaveDocumentType.JPEG;
  options.optimized = true; 

  var layerCount = doc.layers.length;
  for (var l = 0; l < layerCount; l++) {
    var layer = doc.layers[l];
    var layerName = doc.layers[l].name;

    //selectAllLayers();
    //hideLayers();
    //layer.visible = true;

    /* skip the bg layer */
    if (layer.isBackgroundLayer || layer.visible != true) {
      continue;
    }

    doc.exportDocument(File(doc.path + '/' + layerName + '.jpg'), ExportType.SAVEFORWEB, options);
    layer.visible = false;
  }

  //close the file
  doc.close(SaveOptions.DONOTSAVECHANGES);
}

///////////////////////////////////////////////////////////////////////////////
// selectAllLayers - select all layers (Select > All Layers)
///////////////////////////////////////////////////////////////////////////////
function selectAllLayers() {
  var ref = new ActionReference();
  ref.putEnumerated(cTID('Lyr '), cTID('Ordn'), cTID('Trgt'));
  var desc = new ActionDescriptor();
  desc.putReference(cTID('null'), ref);
  executeAction(sTID('selectAllLayers'), desc, DialogModes.NO);
}

///////////////////////////////////////////////////////////////////////////////
// hideLayers - hide all selected layers (Layer > Hide Layers)
///////////////////////////////////////////////////////////////////////////////
function hideLayers() {
  var ref = new ActionReference();
  ref.putEnumerated(cTID('Lyr '), cTID('Ordn'), cTID('Trgt'));
  var list = new ActionList();
  list.putReference(ref);
  var desc = new ActionDescriptor();
  desc.putList(cTID('null'), list);
  executeAction(cTID('Hd  '), desc, DialogModes.NO);
}

function cTID(s) {
  return app.charIDToTypeID(s);
}

function sTID(s) {
  return app.stringIDToTypeID(s);
}

/* Recursively compress files in the given folder. */
function processFolder(folder) {
  var children = folder.getFiles();
  for (var c = 0; c < children.length; c++) {
    var child = children[c];
    if (child.name.slice(-4).toLowerCase() == ".psd") {
      processPSD(child);
    }
  }
}

try {
  processFolder(Folder(dir));
  //processFolder(Folder.selectDialog("Process folder, Resize JPGs"));
} catch (error) {
  alert("Error while processing: " + error);
}