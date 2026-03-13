@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8 space-y-8">
        <div id="profile" class="scroll-mt-20 grid grid-cols-1 lg:grid-cols-12 gap-6">
            <div class="lg:col-span-3">
                <div class="bg-gradient-card rounded-xl border border-border p-6 flex flex-col items-center text-center"
                    style="opacity: 1; transform: none;">
                    <div class="relative mb-4">
                        <div class="w-32 h-32 rounded-full overflow-hidden border-2 glow-primary"
                            style="border-color: rgb(30, 144, 255);"><img src="/assets/img/martial-arts-hero-Bi3X7O7Y.png"
                                alt="Ryu Tanaka" class="w-full h-full object-cover object-top"></div>
                        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 px-3 py-0.5 rounded-full text-xs font-display font-bold"
                            style="background-color: rgb(30, 144, 255); color: rgb(255, 255, 255);">Blue Belt</div>
                    </div>
                    <h2 class="font-display text-2xl font-bold text-foreground mt-2">Ryu Tanaka</h2>
                    <p class="text-sm text-accent font-semibold mt-1">Karate</p>
                    <p class="text-xs text-muted-foreground mt-1">Age 16 • Male</p>
                    <div class="w-full border-t border-border mt-4 pt-4">
                        <p class="text-xs text-muted-foreground leading-relaxed">Dedicated martial artist with 4 years of
                            training. Known for exceptional kicking technique and unwavering discipline. Currently preparing
                            for regional tournament.</p>
                    </div>
                    <div class="w-full mt-4 space-y-2 text-left">
                        <div class="flex justify-between text-xs"><span class="text-muted-foreground">Academy</span><span
                                class="text-foreground font-medium">Dragon Spirit Martial Arts Academy</span></div>
                        <div class="flex justify-between text-xs"><span class="text-muted-foreground">Instructor</span><span
                                class="text-foreground font-medium">Sensei Kenji Watanabe</span></div>
                        <div class="flex justify-between text-xs"><span class="text-muted-foreground">Joined</span><span
                                class="text-foreground font-medium">March 2022</span></div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-9">
                <h2 class="font-display text-2xl font-bold text-foreground mb-4" style="opacity: 1;">Key Performance Metrics
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">🎯</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">8.2</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Technique Accuracy</h3>
                        <p class="text-xs text-muted-foreground mb-3">Punch accuracy, kick form, blocking</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 82%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">⚡</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">7.8</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Speed &amp; Reaction</h3>
                        <p class="text-xs text-muted-foreground mb-3">Reaction time, counter timing</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 78%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">💪</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">7.5</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Strength &amp; Power</h3>
                        <p class="text-xs text-muted-foreground mb-3">Kick power, punch force</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 75%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">🔥</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">8</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Stamina</h3>
                        <p class="text-xs text-muted-foreground mb-3">Endurance, recovery time</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 80%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">🧘</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">9.1</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Discipline &amp; Focus</h3>
                        <p class="text-xs text-muted-foreground mb-3">Respect, attention, following instructions</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 91%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">🥊</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">7.3</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Sparring Performance</h3>
                        <p class="text-xs text-muted-foreground mb-3">Points scored, defence rate</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 73%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">⚖️</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">8.5</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Balance &amp; Coordination</h3>
                        <p class="text-xs text-muted-foreground mb-3">Stability, footwork, body control</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 85%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">🤸</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">7.9</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Flexibility</h3>
                        <p class="text-xs text-muted-foreground mb-3">Leg extension, hip flexibility</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 79%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">📅</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">9.4</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Attendance</h3>
                        <p class="text-xs text-muted-foreground mb-3">92% attendance rate</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 94%;">
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-card rounded-lg border border-border p-4 hover:glow-primary transition-shadow duration-300"
                        style="opacity: 1; transform: none;">
                        <div class="flex items-center justify-between mb-2"><span class="text-2xl">🥋</span><span
                                class="font-display text-2xl font-bold text-gradient-primary">8</span></div>
                        <h3 class="font-display text-sm font-semibold text-foreground mb-1">Belt Progress</h3>
                        <p class="text-xs text-muted-foreground mb-3">On track for next belt</p>
                        <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                            <div class="h-full rounded-full"
                                style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 80%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="analytics" class="scroll-mt-20">
            <h2 class="font-display text-2xl font-bold text-foreground mb-4" style="opacity: 1;">Performance Analytics</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <h3 class="font-display text-lg font-semibold text-foreground mb-4">Overall Skill Progress</h3>
                    <div class="recharts-responsive-container" style="width: 100%; height: 250px; min-width: 0px;">
                        <canvas id="skillChart" cx="50%" cy="50%" class="recharts-surface" width="555" height="250" viewBox="0 0 555 250"
                                style="width: 100%; height: 100%;" ></canvas>
                    </div>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <h3 class="font-display text-lg font-semibold text-foreground mb-4">Technique Radar</h3>
                    <div class="recharts-responsive-container" style="width: 100%; height: 250px; min-width: 0px;">
                        <div class="recharts-wrapper"
                            style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 250px; max-width: 555px;">
                            <canvas id="fighterChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <h3 class="font-display text-lg font-semibold text-foreground mb-4">Training Attendance</h3>
                    <div class="recharts-responsive-container" style="width: 100%; height: 250px; min-width: 0px;">
                        <div class="recharts-wrapper"
                            style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 250px; max-width: 555px;">
                           <canvas id="attendanceChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <h3 class="font-display text-lg font-semibold text-foreground mb-4">Skill Development</h3>
                    <div class="recharts-responsive-container" style="width: 100%; height: 250px; min-width: 0px;">
                        <div class="recharts-wrapper"
                            style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 250px; max-width: 555px;">
                             <canvas id="skillChartdev"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-6">
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <h3 class="font-display text-lg font-semibold text-foreground mb-5">Belt Progress Timeline</h3>
                    <div class="flex items-center justify-between overflow-x-auto pb-2 gap-1">
                        <div class="flex flex-col items-center min-w-[70px]">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-display font-bold border-2"
                                style="background-color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); color: rgb(17, 17, 17); opacity: 1; transform: none;">
                                ✓</div><span
                                class="text-xs font-display font-semibold text-foreground mt-2">White</span><span
                                class="text-[10px] text-muted-foreground">Mar 2022</span>
                        </div>
                        <div class="flex flex-col items-center min-w-[70px]">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-display font-bold border-2"
                                style="background-color: rgb(255, 215, 0); border-color: rgb(255, 215, 0); color: rgb(17, 17, 17); opacity: 1; transform: none;">
                                ✓</div><span
                                class="text-xs font-display font-semibold text-foreground mt-2">Yellow</span><span
                                class="text-[10px] text-muted-foreground">Sep 2022</span>
                        </div>
                        <div class="flex flex-col items-center min-w-[70px]">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-display font-bold border-2"
                                style="background-color: rgb(255, 140, 0); border-color: rgb(255, 140, 0); color: rgb(255, 255, 255); opacity: 1; transform: none;">
                                ✓</div><span
                                class="text-xs font-display font-semibold text-foreground mt-2">Orange</span><span
                                class="text-[10px] text-muted-foreground">Mar 2023</span>
                        </div>
                        <div class="flex flex-col items-center min-w-[70px]">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-display font-bold border-2"
                                style="background-color: rgb(34, 139, 34); border-color: rgb(34, 139, 34); color: rgb(255, 255, 255); opacity: 1; transform: none;">
                                ✓</div><span
                                class="text-xs font-display font-semibold text-foreground mt-2">Green</span><span
                                class="text-[10px] text-muted-foreground">Oct 2023</span>
                        </div>
                        <div class="flex flex-col items-center min-w-[70px]">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-display font-bold border-2"
                                style="background-color: rgb(30, 144, 255); border-color: rgb(30, 144, 255); color: rgb(255, 255, 255); opacity: 1; transform: none;">
                                ✓</div><span
                                class="text-xs font-display font-semibold text-foreground mt-2">Blue</span><span
                                class="text-[10px] text-muted-foreground">Jun 2024</span>
                        </div>
                        <div class="flex flex-col items-center min-w-[70px]">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-display font-bold border-2"
                                style="background-color: transparent; border-color: rgb(139, 69, 19); color: rgb(129, 136, 152); opacity: 0.4; transform: none;">
                                ?</div><span
                                class="text-xs font-display font-semibold text-foreground mt-2">Brown</span><span
                                class="text-[10px] text-muted-foreground">Target: Dec 2024</span>
                        </div>
                        <div class="flex flex-col items-center min-w-[70px]">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-xs font-display font-bold border-2"
                                style="background-color: transparent; border-color: rgb(26, 26, 26); color: rgb(129, 136, 152); opacity: 0.4; transform: none;">
                                ?</div><span
                                class="text-xs font-display font-semibold text-foreground mt-2">Black</span><span
                                class="text-[10px] text-muted-foreground">Target: 2025</span>
                        </div>
                    </div>
                </div>
                <div id="sparring" class="scroll-mt-20">
                    <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                        <h3 class="font-display text-lg font-semibold text-foreground mb-4">Sparring Record</h3>
                        <div class="flex gap-4 mb-5">
                            <div class="flex-1 text-center">
                                <div class="font-display text-3xl font-bold" style="color: rgb(33, 196, 93);">18</div>
                                <div class="text-xs text-muted-foreground mt-1">Wins</div>
                            </div>
                            <div class="flex-1 text-center">
                                <div class="font-display text-3xl font-bold" style="color: rgb(244, 185, 37);">5</div>
                                <div class="text-xs text-muted-foreground mt-1">Draws</div>
                            </div>
                            <div class="flex-1 text-center">
                                <div class="font-display text-3xl font-bold" style="color: rgb(228, 37, 37);">7</div>
                                <div class="text-xs text-muted-foreground mt-1">Losses</div>
                            </div>
                        </div>
                        <div class="w-full h-2 rounded-full bg-secondary flex overflow-hidden">
                            <div style="background-color: rgb(33, 196, 93); width: 60%;"></div>
                            <div style="background-color: rgb(244, 185, 37); width: 16.6667%;"></div>
                            <div style="background-color: rgb(228, 37, 37); width: 23.3333%;"></div>
                        </div>
                        <h4 class="font-display text-sm font-semibold text-foreground mt-6 mb-3">Competition Record</h4>
                        <div class="space-y-2">
                            <div
                                class="flex items-center justify-between text-xs py-1.5 border-b border-border last:border-0">
                                <span class="text-foreground">Regional Championship 2024</span>
                                <div class="flex items-center gap-2"><span class="text-muted-foreground">Kata</span><span
                                        class="font-bold text-accent">🥇 Gold</span></div>
                            </div>
                            <div
                                class="flex items-center justify-between text-xs py-1.5 border-b border-border last:border-0">
                                <span class="text-foreground">City Open 2024</span>
                                <div class="flex items-center gap-2"><span class="text-muted-foreground">Kumite</span><span
                                        class="font-bold text-foreground">🥈 Silver</span></div>
                            </div>
                            <div
                                class="flex items-center justify-between text-xs py-1.5 border-b border-border last:border-0">
                                <span class="text-foreground">Academy Tournament 2023</span>
                                <div class="flex items-center gap-2"><span class="text-muted-foreground">Kata</span><span
                                        class="font-bold text-accent">🥇 Gold</span></div>
                            </div>
                            <div
                                class="flex items-center justify-between text-xs py-1.5 border-b border-border last:border-0">
                                <span class="text-foreground">Inter-School Challenge 2023</span>
                                <div class="flex items-center gap-2"><span class="text-muted-foreground">Kumite</span><span
                                        class="font-bold text-muted-foreground">🥉 Bronze</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="achievements" class="scroll-mt-20">
                <div class="space-y-6">
                    <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                        <h3 class="font-display text-lg font-semibold text-foreground mb-3">Coach Feedback</h3>
                        <div class="flex items-center gap-3 mb-3">
                            <div class="text-3xl font-display font-bold text-gradient-gold">8.5</div>
                            <div class="text-xs text-muted-foreground">/10 overall rating</div>
                        </div>
                        <p class="text-sm text-muted-foreground leading-relaxed italic">"Ryu shows excellent discipline and
                            a rapidly improving kicking technique. His dedication to training is commendable. Focus areas:
                            improving defensive transitions and maintaining composure during extended sparring rounds."</p>
                        <p class="text-xs text-muted-foreground mt-2">— June 15, 2024</p>
                    </div>
                    <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                        <h3 class="font-display text-lg font-semibold text-foreground mb-4">Achievements</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-2 rounded-lg bg-secondary/50"
                                style="opacity: 1; transform: none;"><span class="text-xl">🥇</span>
                                <div>
                                    <div class="text-sm font-semibold text-foreground">Regional Tournament — Gold</div>
                                    <div class="text-xs text-muted-foreground">Apr 2024</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-2 rounded-lg bg-secondary/50"
                                style="opacity: 1; transform: none;"><span class="text-xl">🏆</span>
                                <div>
                                    <div class="text-sm font-semibold text-foreground">Best Discipline Award</div>
                                    <div class="text-xs text-muted-foreground">Mar 2024</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-2 rounded-lg bg-secondary/50"
                                style="opacity: 1; transform: none;"><span class="text-xl">⭐</span>
                                <div>
                                    <div class="text-sm font-semibold text-foreground">100 Training Hours</div>
                                    <div class="text-xs text-muted-foreground">Jan 2024</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-2 rounded-lg bg-secondary/50"
                                style="opacity: 1; transform: none;"><span class="text-xl">📅</span>
                                <div>
                                    <div class="text-sm font-semibold text-foreground">Perfect Attendance — Q1</div>
                                    <div class="text-xs text-muted-foreground">Mar 2024</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-2 rounded-lg bg-secondary/50"
                                style="opacity: 1; transform: none;"><span class="text-xl">📜</span>
                                <div>
                                    <div class="text-sm font-semibold text-foreground">Kata Excellence Certificate</div>
                                    <div class="text-xs text-muted-foreground">Feb 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   

@endsection