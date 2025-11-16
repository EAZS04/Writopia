<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Writopia</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            body {
                background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
                color: #333;
                line-height: 1.6;
                min-height: 100vh;
                padding: 20px;
            }
            
            .container {
                max-width: 1200px;
                margin: 0 auto;
                background-color: rgba(255, 255, 255, 0.95);
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                overflow: hidden;
            }
            
            header {
                background: linear-gradient(to right, #4a00e0, #8e2de2);
                color: white;
                padding: 40px 20px;
                text-align: center;
                position: relative;
                overflow: hidden;
            }
            
            header::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.1" d="M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,138.7C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
                background-size: cover;
                background-position: center;
            }
            
            h1 {
                font-size: 3.5rem;
                margin-bottom: 10px;
                position: relative;
                z-index: 1;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }
            
            .subtitle {
                font-size: 1.2rem;
                opacity: 0.9;
                position: relative;
                z-index: 1;
            }
            
            .content {
                padding: 40px;
            }
            
            .section {
                margin-bottom: 40px;
            }
            
            .section-title {
                font-size: 2rem;
                color: #4a00e0;
                margin-bottom: 20px;
                padding-bottom: 10px;
                border-bottom: 2px solid #e0e0e0;
            }
            
            .team-members {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
                margin-bottom: 30px;
            }
            
            .member-card {
                background: white;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                text-align: center;
            }
            
            .member-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            }
            
            .member-name {
                font-weight: bold;
                font-size: 1.2rem;
                color: #4a00e0;
                margin-bottom: 5px;
            }
            
            .member-role {
                color: #666;
                font-size: 0.9rem;
                margin-bottom: 10px;
            }
            
            .description {
                background: #f8f9fa;
                padding: 25px;
                border-radius: 10px;
                border-left: 5px solid #4a00e0;
            }
            
            .description p {
                margin-bottom: 15px;
            }
            
            .description p:last-child {
                margin-bottom: 0;
            }
            
            footer {
                background: #333;
                color: white;
                text-align: center;
                padding: 20px;
                margin-top: 40px;
            }
            
            @media (max-width: 768px) {
                h1 {
                    font-size: 2.5rem;
                }
                
                .content {
                    padding: 20px;
                }
                
                .team-members {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Kelompok 4</h1>
                <p class="subtitle">Writopia - Platform Menulis Kolaboratif</p>
            </header>
            
            <div class="content">
                <div class="section">
                    <h2 class="section-title">Anggota Tim</h2>
                    <div class="team-members">
                        <div class="member-card">
                            <div class="member-name">Audry Nabila</div>
                            <div class="member-role">Dev FullStack</div>
                            <p>Dengan NIM 1223009</p>
                        </div>
                        <div class="member-card">
                            <div class="member-name">Elan Nurhaliza</div>
                            <div class="member-role">Dev OP</div>
                            <p>Dengan NIM 1223007</p>
                        </div>
                        <div class="member-card">
                            <div class="member-name">Azzahra Maharani</div>
                            <div class="member-role">Dev PM</div>
                            <p>Dengan NIM 1223008</p>
                        </div>
                        <div class="member-card">
                            <div class="member-name">Sekar NT</div>
                            <div class="member-role">Dev PM</div>
                            <p>Dengan NIM 1233016</p>
                        </div>
                    </div>
                </div>
                
                <div class="section">
                    <h2 class="section-title">Tentang Writopia</h2>
                    <div class="description">
                        <p>Writopia adalah platform menulis kolaboratif yang dirancang untuk memudahkan para penulis dalam membuat, mengedit, dan berbagi karya tulis mereka secara real-time. Platform ini menyediakan berbagai fitur yang mendukung proses kreatif menulis, mulai dari penyusunan draf hingga publikasi.</p>
                        
                        <p>Dengan Writopia, tim dapat bekerja sama dalam satu dokumen secara bersamaan, melihat perubahan yang dilakukan oleh anggota lain, dan memberikan komentar atau saran untuk perbaikan. Platform ini cocok digunakan oleh berbagai kalangan, mulai dari penulis profesional, akademisi, hingga pelajar yang sedang mengerjakan tugas kelompok.</p>
                        
                        <p>Platform Simpel untuk Membuat dan Membaca Cerita</p>
                    </div>
                </div>
                
                <div class="section">
                    <h2 class="section-title">Visi dan Misi</h2>
                    <div class="description">
                        <p><strong>Visi:</strong> Menjadi platform menulis kolaboratif terdepan yang memberdayakan kreativitas dan produktivitas penulis di seluruh dunia.</p>
                        
                        <p><strong>Misi:</strong></p>
                        <ul style="margin-left: 20px; margin-bottom: 15px;">
                            <li>Menyediakan alat yang intuitif dan powerful untuk proses menulis kolaboratif</li>
                            <li>Mendorong terciptanya komunitas penulis yang saling mendukung</li>
                            <li>Memberikan akses yang mudah dan terjangkau bagi semua kalangan</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <footer>
                <p>&copy; 2023 Writopia - Kelompok 4. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>