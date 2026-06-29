<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Taito, The Skills Lab — Education Division of Managix Global</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
  *, *::before, *::after { box-sizing:border-box; margin:0; padding:0; }
  :root {
    --navy:#1B3A6B; --navy2:#14294D; --navy3:#0F1F3D;
    --gold:#D97706; --gold2:#F59E0B;
    --white:#FFFFFF; --lblue:#93C5FD; --ltblue:#BFDBFE;
    --grey:#94A3B8; --slate:#475569;
    --teal:#0D9488; --blue:#2563EB; --purp:#7C3AED;
    --green:#059669; --orange:#EA580C;
  }
  body { font-family:'Inter',system-ui,sans-serif; background:var(--navy3); min-height:100vh; display:flex; align-items:center; justify-content:center; padding:20px; }

  /* BANNER */
  .banner { width:100%; max-width:1440px; background:linear-gradient(135deg,var(--navy3) 0%,var(--navy2) 40%,var(--navy) 100%); border-radius:16px; overflow:hidden; box-shadow:0 32px 80px rgba(0,0,0,0.5); position:relative; }
  .banner::before { content:''; position:absolute; top:0;left:0;right:0; height:6px; background:linear-gradient(90deg,var(--gold),var(--gold2),var(--gold)); }
  .banner::after  { content:''; position:absolute; bottom:0;left:0;right:0; height:4px; background:linear-gradient(90deg,var(--gold),var(--gold2),var(--gold)); }
  .deco { position:absolute; right:-80px; top:50%; transform:translateY(-50%); width:500px; height:500px; pointer-events:none; opacity:0.06; }
  .deco circle { fill:none; stroke:white; }
  .inner { display:grid; grid-template-columns:280px 1fr; padding:36px 36px 44px; position:relative; z-index:1; }

  /* LEFT */
  .left { padding-right:32px; border-right:1px solid rgba(217,119,6,0.35); display:flex; flex-direction:column; justify-content:space-between; gap:24px; }
  .brand h1 { font-size:66px; font-weight:900; color:var(--white); letter-spacing:-2px; line-height:1; margin-bottom:6px; }
  .gold-line { width:140px; height:4px; background:linear-gradient(90deg,var(--gold),transparent); margin-bottom:8px; border-radius:2px; }
  .brand .subtitle { font-size:18px; color:var(--lblue); margin-bottom:3px; }
  .brand .tagline { font-size:13px; color:var(--ltblue); display:flex; align-items:center; gap:8px; margin-bottom:16px; }
  .brand .tagline::before { content:''; width:3px; height:16px; background:var(--gold); border-radius:2px; flex-shrink:0; }
  .brand .desc { font-size:12px; color:var(--grey); line-height:1.65; padding-top:10px; border-top:1px solid rgba(255,255,255,0.06); }
  .badge { display:inline-block; background:var(--gold); color:var(--white); font-size:11px; font-weight:700; padding:7px 14px; border-radius:8px; margin-top:14px; }
  .cta-btn { display:inline-flex; align-items:center; justify-content:center; gap:8px; background:var(--white); color:var(--navy); font-size:13px; font-weight:700; padding:12px 20px; border-radius:10px; border:none; cursor:pointer; transition:all 0.2s; font-family:inherit; width:100%; }
  .cta-btn:hover { background:var(--ltblue); transform:translateY(-1px); }

  /* RIGHT */
  .right { padding-left:32px; }
  .services-header { display:flex; align-items:center; gap:12px; margin-bottom:16px; }
  .services-header h2 { font-size:12px; font-weight:700; color:var(--gold); letter-spacing:0.14em; text-transform:uppercase; white-space:nowrap; }
  .services-header::after { content:''; flex:1; height:1px; background:linear-gradient(90deg,rgba(217,119,6,0.4),transparent); }
  .cards { display:grid; grid-template-columns:repeat(5,1fr); gap:10px; }

  /* CARD */
  .card { background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:18px 10px 14px; cursor:pointer; transition:all 0.25s; position:relative; overflow:hidden; display:flex; flex-direction:column; align-items:center; text-align:center; gap:8px; min-height:210px; }
  .card::before { content:''; position:absolute; top:0;left:0;right:0; height:3px; border-radius:12px 12px 0 0; background:var(--accent,var(--gold)); transition:height 0.25s; }
  .card:hover { background:rgba(255,255,255,0.08); border-color:rgba(255,255,255,0.16); transform:translateY(-3px); box-shadow:0 12px 32px rgba(0,0,0,0.3); }
  .card:hover::before { height:5px; }
  .card-icon { width:46px; height:46px; border-radius:12px; display:flex; align-items:center; justify-content:center; font-size:20px; flex-shrink:0; }
  .card-label { font-size:12px; font-weight:700; color:var(--white); line-height:1.3; }
  .card-sub { font-size:10px; color:var(--grey); line-height:1.45; flex:1; }
  .cs-badge { display:inline-block; background:rgba(217,119,6,0.15); color:var(--gold2); font-size:9px; font-weight:700; padding:3px 8px; border-radius:20px; border:1px solid rgba(217,119,6,0.3); text-transform:uppercase; letter-spacing:0.05em; margin-top:auto; }

  /* OVERLAY */
  .overlay { display:none; position:fixed; inset:0; background:rgba(0,0,0,0.65); z-index:100; align-items:center; justify-content:center; padding:20px; backdrop-filter:blur(4px); }
  .overlay.open { display:flex; }
  .panel { background:linear-gradient(135deg,var(--navy2),var(--navy3)); border:1px solid rgba(255,255,255,0.1); border-radius:20px; padding:32px; max-width:540px; width:100%; position:relative; box-shadow:0 32px 80px rgba(0,0,0,0.6); animation:su 0.3s ease; }
  @keyframes su { from{opacity:0;transform:translateY(20px)} to{opacity:1;transform:translateY(0)} }
  .p-close { position:absolute; top:14px;right:14px; background:rgba(255,255,255,0.07); border:none; color:var(--grey); width:30px; height:30px; border-radius:8px; cursor:pointer; font-size:14px; display:flex; align-items:center; justify-content:center; font-family:inherit; transition:background 0.2s; }
  .p-close:hover { background:rgba(255,255,255,0.14); color:white; }
  .p-icon { width:50px; height:50px; border-radius:14px; display:flex; align-items:center; justify-content:center; font-size:22px; margin-bottom:14px; }
  .panel h3 { font-size:20px; font-weight:800; color:var(--white); margin-bottom:5px; }
  .p-line { width:42px; height:3px; border-radius:2px; margin-bottom:14px; }
  .panel p { font-size:13px; color:var(--grey); line-height:1.65; margin-bottom:12px; }
  .panel ul { list-style:none; display:flex; flex-direction:column; gap:8px; margin-bottom:18px; }
  .panel ul li { display:flex; align-items:flex-start; gap:10px; font-size:13px; color:var(--ltblue); line-height:1.5; }
  .dot { width:6px; height:6px; border-radius:50%; flex-shrink:0; margin-top:6px; display:inline-block; }
  .p-btn { display:inline-flex; align-items:center; gap:8px; padding:11px 22px; border-radius:10px; font-size:13px; font-weight:700; cursor:pointer; border:none; font-family:inherit; transition:all 0.2s; text-decoration:none; color:white; }
  .p-btn:hover { transform:translateY(-1px); opacity:0.9; }

  /* COMING SOON */
  .cs-body { text-align:center; padding:12px 0; }
  .cs-body .cs-big { font-size:42px; margin-bottom:12px; }
  .cs-body h3 { font-size:21px; font-weight:800; color:var(--white); margin-bottom:6px; }
  .cs-body .cs-gl { width:42px; height:3px; background:var(--gold); border-radius:2px; margin:0 auto 14px; }
  .cs-body p { font-size:13px; color:var(--grey); margin-bottom:20px; line-height:1.6; }
  .pill-row { display:flex; gap:10px; justify-content:center; flex-wrap:wrap; }
  .pill { display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.11); color:var(--ltblue); font-size:12px; padding:9px 14px; border-radius:10px; text-decoration:none; transition:background 0.2s; }
  .pill:hover { background:rgba(255,255,255,0.11); }

  /* CONTACT */
  .ct-body { text-align:center; }
  .ct-body h3 { font-size:21px; font-weight:800; color:var(--white); margin-bottom:6px; }
  .ct-body .ct-gl { width:42px; height:3px; background:var(--gold); border-radius:2px; margin:0 auto 14px; }
  .ct-body > p { font-size:13px; color:var(--grey); margin-bottom:20px; line-height:1.6; }
  .ct-list { display:flex; flex-direction:column; gap:10px; margin-bottom:20px; text-align:left; }
  .ct-list a { display:flex; align-items:center; gap:12px; background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1); color:var(--ltblue); font-size:13px; padding:12px 16px; border-radius:10px; text-decoration:none; transition:background 0.2s; }
  .ct-list a:hover { background:rgba(255,255,255,0.1); }
  .ct-ci { width:32px; height:32px; border-radius:8px; background:var(--gold); display:flex; align-items:center; justify-content:center; font-size:14px; flex-shrink:0; }
  .ct-lbl { font-size:10px; color:#64748B; margin-bottom:2px; }
  .ct-val { font-weight:600; font-size:13px; }
  .ct-note { font-size:11px; color:#475569; }

  /* EDIT HINT — visible only when file is opened locally for editing */
  .edit-hint { display:none; background:rgba(217,119,6,0.1); border:1px dashed rgba(217,119,6,0.4); border-radius:8px; padding:10px 14px; margin-bottom:16px; font-size:11px; color:var(--gold2); line-height:1.6; text-align:left; }
</style>
</head>
<body>

<div class="banner">
  <svg class="deco" viewBox="0 0 500 500"><circle cx="400" cy="250" r="200" stroke-width="1.5"/><circle cx="400" cy="250" r="160" stroke-width="1"/><circle cx="400" cy="250" r="120" stroke-width="1"/><circle cx="400" cy="250" r="80" stroke-width="1"/></svg>

  <div class="inner">

    <!-- LEFT -->
    <div class="left">
      <div class="brand">
        <h1>TAITO</h1>
        <div class="gold-line"></div>
        <p class="subtitle">The Skills Lab</p>
        <p class="tagline">Learn Differently.</p>
        <p class="desc">Empowering learners, educators, and institutions across the world.</p>
        <div class="badge">Education Division of Managix Global</div>
      </div>
      <button class="cta-btn" onclick="openContact()">✉&nbsp;&nbsp;Get in Touch</button>
    </div>

    <!-- RIGHT -->
    <div class="right">
      <div class="services-header"><h2>Our Services</h2></div>
      <div class="cards">

        <div class="card" style="--accent:#0D9488;" onclick="openPanel('cpd')">
          <div class="card-icon" style="background:#0D9488;">📚</div>
          <div class="card-label">Teacher CPD</div>
          <div class="card-sub">Curriculum-aligned professional development for international school teachers</div>
        </div>

        <div class="card" style="--accent:#2563EB;" onclick="openCS('Corporate Training','💼','#2563EB')">
          <div class="card-icon" style="background:#2563EB;">💼</div>
          <div class="card-label">Corporate Training</div>
          <div class="card-sub">IT and business professional development</div>
          <div class="cs-badge">Coming Soon</div>
        </div>

        <div class="card" style="--accent:#7C3AED;" onclick="openCS('Education Consultancy','🏫','#7C3AED')">
          <div class="card-icon" style="background:#7C3AED;">🏫</div>
          <div class="card-label">Education Consultancy</div>
          <div class="card-sub">Strategic support for schools and institutions</div>
          <div class="cs-badge">Coming Soon</div>
        </div>

        <div class="card" style="--accent:#059669;" onclick="openPanel('uni')">
          <div class="card-icon" style="background:#059669;">🎓</div>
          <div class="card-label">University Admissions &amp; Career Counselling</div>
          <div class="card-sub">British Council certified academic counsellor</div>
        </div>

        <div class="card" style="--accent:#D97706;" onclick="openCS('School Accreditation Support','✅','#D97706')">
          <div class="card-icon" style="background:#D97706;">✅</div>
          <div class="card-label">School Accreditation</div>
          <div class="card-sub">International accreditation support</div>
          <div class="cs-badge">Coming Soon</div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- OVERLAY -->
<div class="overlay" id="overlay" onclick="closeOverlay(event)">
  <div class="panel" id="pc"></div>
</div>

<script>
const PHONE = '+966 57 122 4121';
const EMAIL = 'urooj@managix.in';

const panels = {
  cpd: {
    icon:'📚', color:'#0D9488',
    title:'Teacher CPD',
    sub:'Professional Development for International School Teachers',
    desc:'Practical, research-informed professional development sessions for teachers at international schools. Each session delivers one immediately applicable teaching strategy, aligned with internationally recognised curriculum standards.',
    points:[
      'CPD for teachers following British and American curricula',
      'Science, Mathematics, and English — Grades K to 12',
      'Live online interactive sessions',
      'Informed by Finnish pedagogy — one of the most evidence-based approaches to teaching and learning in the world',
      'STEAM-integrated teaching strategies',
      'One strategy per session — ready to use in your next lesson',
      'CPD Certificate of Participation on completion',
    ],
    cta:'Register Your Interest'
  },
  uni: {
    icon:'🎓', color:'#059669',
    title:'University Admissions & Career Counselling',
    sub:'British Council Certified Academic Counsellor',
    desc:'Expert, personalised guidance for students seeking admission to leading universities worldwide. Delivered by a British Council Certified Academic Counsellor with extensive experience supporting students from international schools in Saudi Arabia.',
    points:[
      'International university admissions support',
      'Universities in New Zealand, USA, Australia, and the UK',
      'Career counselling and academic pathway planning',
      'Personal statement and application support',
      'University shortlisting tailored to each student\'s profile',
      'Delivered by a British Council Certified Academic Counsellor',
    ],
    cta:'Get in Touch'
  }
};

function openPanel(key){
  const p = panels[key];
  document.getElementById('pc').innerHTML = `
    <button class="p-close" onclick="close_()">✕</button>
    <div class="p-icon" style="background:${p.color}">${p.icon}</div>
    <h3>${p.title}</h3>
    <div class="p-line" style="background:${p.color}"></div>
    <p><strong style="color:#BFDBFE">${p.sub}</strong></p>
    <p>${p.desc}</p>
    <ul>${p.points.map(pt=>`<li><span class="dot" style="background:${p.color}"></span>${pt}</li>`).join('')}</ul>
    <button class="p-btn" style="background:${p.color}" onclick="openContact()">${p.cta} →</button>
  `;
  document.getElementById('overlay').classList.add('open');
}

function openCS(name, icon, color){
  document.getElementById('pc').innerHTML = `
    <button class="p-close" onclick="close_()">✕</button>
    <div class="cs-body">
      <div class="cs-big">${icon}</div>
      <h3>${name}</h3>
      <div class="cs-gl"></div>
      <p>We are currently developing this service. Register your interest and we will be in touch as soon as it becomes available.</p>
      <div class="pill-row">
        <a href="tel:${PHONE}" class="pill">📞&nbsp;${PHONE}</a>
        <a href="mailto:${EMAIL}" class="pill">✉&nbsp;${EMAIL}</a>
      </div>
    </div>
  `;
  document.getElementById('overlay').classList.add('open');
}

function openContact(){
  document.getElementById('pc').innerHTML = `
    <button class="p-close" onclick="close_()">✕</button>
    <div class="ct-body">
      <div class="p-icon" style="background:#D97706;margin:0 auto 14px;">✉</div>
      <h3>Get in Touch</h3>
      <div class="ct-gl"></div>
      <p>We would love to hear from you. Reach us through any of the following and we will get back to you shortly.</p>
      <div class="ct-list">
        <a href="tel:${PHONE}">
          <div class="ct-ci">📞</div>
          <div><div class="ct-lbl">Phone</div><div class="ct-val">${PHONE}</div></div>
        </a>
        <a href="mailto:${EMAIL}">
          <div class="ct-ci">✉</div>
          <div><div class="ct-lbl">Email</div><div class="ct-val">${EMAIL}</div></div>
        </a>
        <a href="https://managixglobal.com" target="_blank">
          <div class="ct-ci">🌐</div>
          <div><div class="ct-lbl">Website</div><div class="ct-val">managixglobal.com</div></div>
        </a>
      </div>
      <p class="ct-note">Taito, The Skills Lab — Education Division of Managix Global</p>
    </div>
  `;
  document.getElementById('overlay').classList.add('open');
}

function close_(){ document.getElementById('overlay').classList.remove('open'); }
function closeOverlay(e){ if(e.target===document.getElementById('overlay')) close_(); }
document.addEventListener('keydown', e=>{ if(e.key==='Escape') close_(); });
</script>
</body>
</html>
