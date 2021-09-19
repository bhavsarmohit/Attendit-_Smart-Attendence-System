function show(shown) {
  hide_pages();

  console.log(shown);
  nav_dash_manage(shown);
  
  document.getElementById(shown).style.display='block';



  return false;
}

function hide_pages(shown) {
  document.getElementById('dashboard').style.display='none';

  document.getElementById('divisions-view').style.display='none';
  document.getElementById('divisions-add').style.display='none';
  document.getElementById('divisions-modify').style.display='none';

  document.getElementById('subjects-view').style.display='none';
  document.getElementById('subjects-add').style.display='none';
  document.getElementById('subjects-modify').style.display='none';

  document.getElementById('class-view').style.display='none';
  document.getElementById('class-add').style.display='none';
  document.getElementById('class-modify').style.display='none';

  document.getElementById('teachers-view').style.display='none';
  document.getElementById('teachers-add').style.display='none';
  document.getElementById('teachers-modify').style.display='none';

  document.getElementById('students-view').style.display='none';
  document.getElementById('students-add').style.display='none';
  document.getElementById('students-modify').style.display='none';

  document.getElementById('batches-view').style.display='none';
  document.getElementById('batches-add').style.display='none';
  document.getElementById('batches-modify').style.display='none';

  document.getElementById('analysis').style.display='none';
  document.getElementById('reports').style.display='none';
  return false;
}

function set_nav_component_active(id){
  const el = document.getElementById(id);

  el.className = el.className + " active";
  
  console.log("classname active:"+el.className);
}

function set_nav_component_unactive(id){
  const el = document.getElementById(id);

  var classnm = el.className;
  
  classnm = classnm.replace(' active','');
  el.className = classnm

}


function nav_dash_manage(id){
  
  set_nav_component_unactive("nav_dashboard");
  if(id=="dashboard"){
    set_nav_component_active("nav_dashboard")
  }
  // else{
  //   set_nav_component_unactive("nav_dash");
  // }
}