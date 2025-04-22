<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Hosea Oktarivanes Ferdinan Sinaga</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --dark-color: #2c3e50;
            --light-color: #ecf0f1;
            --accent-color: #e74c3c;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        
        header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        main {
            flex: 1;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }
        
        .profile-section {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: var(--light-color);
            margin-bottom: 1.5rem;
            overflow: hidden;
            border: 5px solid var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-initial {
            font-size: 5rem;
            color: var(--dark-color);
            font-weight: bold;
        }
        
        .details-section {
            flex: 2;
            min-width: 300px;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-color);
            font-size: 1.8rem;
        }
        
        .bio-item {
            margin-bottom: 1.2rem;
            display: flex;
            flex-wrap: wrap;
        }
        
        .bio-label {
            font-weight: 600;
            width: 200px;
            color: var(--dark-color);
        }
        
        .bio-value {
            flex: 1;
            min-width: 200px;
        }
        
        .highlight {
            color: var(--accent-color);
            font-weight: 600;
        }
        
        .education-section {
            margin-top: 2rem;
        }
        
        .skills-section {
            margin-top: 2rem;
        }
        
        .skill-bars {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .skill-item {
            flex: 1;
            min-width: 200px;
        }
        
        .skill-name {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .skill-bar {
            height: 10px;
            background-color: var(--light-color);
            border-radius: 5px;
            overflow: hidden;
        }
        
        .skill-progress {
            height: 100%;
            background-color: var(--primary-color);
            border-radius: 5px;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .bio-label, .bio-value {
                width: 100%;
            }
            
            .bio-label {
                margin-bottom: 0.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-content">
                <h1>Biodata Mahasiswa</h1>
                <p>Fakultas Teknik Informatika</p>
            </div>
        </header>
        
        <main>
            <section class="profile-section">
                <div class="profile-image">
                    <div class="profile-initial">H</div>
                    <!-- Jika ada foto, gunakan: <img src="foto-hosea.jpg" alt="Hosea Oktarivanes Ferdinan Sinaga"> -->
                </div>
                <h2>Hosea Oktarivanes Ferdinan Sinaga</h2>
                <p>Mahasiswa Teknologi Informasi</p>
                <div class="social-links">
                    <a href="#" title="Email">✉️</a>
                    <a href="#" title="LinkedIn">in</a>
                    <a href="#" title="GitHub">git</a>
                </div>
            </section>
            
            <section class="details-section">
                <h3 class="section-title">Informasi Pribadi</h3>
                
                <div class="bio-item">
                    <div class="bio-label">Nama Lengkap</div>
                    <div class="bio-value">Hosea Oktarivanes Ferdinan Sinaga</div>
                </div>
                
                <div class="bio-item">
                    <div class="bio-label">NIM</div>
                    <div class="bio-value highlight">1722098</div>
                </div>
                
                <div class="bio-item">
                    <div class="bio-label">Tempat, Tanggal Lahir</div>
                    <div class="bio-value">Bekasi, 11 Oktober 2004</div>
                </div>
                
                <div class="bio-item">
                    <div class="bio-label">Semester</div>
                    <div class="bio-value">6 (Enam)</div>
                </div>
                
                <div class="bio-item">
                    <div class="bio-label">Fakultas</div>
                    <div class="bio-value">Teknik Informatika</div>
                </div>
                
                <div class="bio-item">
                    <div class="bio-label">Program Studi</div>
                    <div class="bio-value">Teknologi Informasi</div>
                </div>
                
                <div class="education-section">
                    <h3 class="section-title">Pendidikan</h3>
                    <div class="bio-item">
                        <div class="bio-label">Perguruan Tinggi</div>
                        <div class="bio-value">Universitas Indonesia</div>
                    </div>
                    <div class="bio-item">
                        <div class="bio-label">Tahun Masuk</div>
                        <div class="bio-value">2022</div>
                    </div>
                </div>
                
                <div class="skills-section">
                    <h3 class="section-title">Keahlian</h3>
                    <div class="skill-bars">
                        <div class="skill-item">
                            <div class="skill-name">Pemrograman Web</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">Database</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">UI/UX Design</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-name">Mobile Development</div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2025 Hosea Oktarivanes Ferdinan Sinaga - Mahasiswa Teknologi Informasi</p>
        </footer>
    </div>
</body>
</html>
