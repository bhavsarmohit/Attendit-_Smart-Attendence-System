function show(shown) {
  hide_pages();
  document.getElementById(shown).style.display='block';
  return false;
}

function hide_pages(shown) {
  document.getElementById('dashboard').style.display='none';

  document.getElementById('divisions-view').style.display='none';
  document.getElementById('divisions-add').style.display='none';
  document.getElementById('divisions-modify').style.display='none';

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