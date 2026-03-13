@extends('layouts.app')

@section('title', 'Matches')

@section('content')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8 space-y-10">
        <section>
            <h2 class="font-display text-2xl font-bold text-foreground mb-6 flex items-center gap-2" style="opacity: 1;">
                <span class="text-accent">⚔️</span> Upcoming Matches
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="bg-gradient-card rounded-xl border border-border p-5 hover:glow-gold transition-shadow duration-300"
                    style="opacity: 1; transform: none;">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display text-base font-bold text-foreground leading-tight">National Junior
                            Championship 2024</h3><span
                            class="text-[10px] font-display font-bold px-2 py-0.5 rounded-full border bg-green-500/20 border-green-500/40 text-green-400">Confirmed</span>
                    </div>
                    <div class="space-y-1.5 text-xs text-muted-foreground mb-4">
                        <p>📅 August 15, 2024</p>
                        <p>📍 Tokyo Sports Arena</p>
                        <p>🥋 Kata &amp; Kumite — Round of 16</p>
                        <p>👤 TBD (Draw pending)</p>
                    </div>
                    <div class="border-t border-border pt-3 mb-3">
                        <p class="text-xs font-display font-semibold text-foreground mb-2">Preparation Plan</p>
                        <ul class="space-y-1">
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Focus on defensive transitions</li>
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Increase sparring sessions to 4/week</li>
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Work on stamina for extended rounds</li>
                        </ul>
                    </div>
                    <p class="text-xs text-accent italic">🎯 "Quarter-final minimum. Gold medal is within reach if defense
                        improves."</p>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5 hover:glow-gold transition-shadow duration-300"
                    style="opacity: 1; transform: none;">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display text-base font-bold text-foreground leading-tight">Inter-Academy
                            Invitational 2024</h3><span
                            class="text-[10px] font-display font-bold px-2 py-0.5 rounded-full border bg-green-500/20 border-green-500/40 text-green-400">Confirmed</span>
                    </div>
                    <div class="space-y-1.5 text-xs text-muted-foreground mb-4">
                        <p>📅 September 22, 2024</p>
                        <p>📍 Osaka Martial Arts Center</p>
                        <p>🥋 Kumite — Group Stage</p>
                        <p>👤 Seeded against Hiroshi Sato (rematch)</p>
                    </div>
                    <div class="border-t border-border pt-3 mb-3">
                        <p class="text-xs font-display font-semibold text-foreground mb-2">Preparation Plan</p>
                        <ul class="space-y-1">
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Study opponent's previous match footage</li>
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Improve counter-attack timing</li>
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Mental composure training</li>
                        </ul>
                    </div>
                    <p class="text-xs text-accent italic">🎯 "Redemption match. Focus on not repeating City Open mistakes."
                    </p>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5 hover:glow-gold transition-shadow duration-300"
                    style="opacity: 1; transform: none;">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display text-base font-bold text-foreground leading-tight">Year-End Academy Showcase
                            2024</h3><span
                            class="text-[10px] font-display font-bold px-2 py-0.5 rounded-full border bg-accent/20 border-accent/40 text-accent">Pending</span>
                    </div>
                    <div class="space-y-1.5 text-xs text-muted-foreground mb-4">
                        <p>📅 December 7, 2024</p>
                        <p>📍 Dragon Spirit Academy Hall</p>
                        <p>🥋 Kata — Demonstration</p>
                        <p>👤 Exhibition — no opponent</p>
                    </div>
                    <div class="border-t border-border pt-3 mb-3">
                        <p class="text-xs font-display font-semibold text-foreground mb-2">Preparation Plan</p>
                        <ul class="space-y-1">
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Perfect the advanced kata sequence</li>
                            <li class="text-xs text-muted-foreground flex items-start gap-1.5"><span
                                    class="text-primary mt-0.5">▸</span> Coordinate with Sensei on routine</li>
                        </ul>
                    </div>
                    <p class="text-xs text-accent italic">🎯 "Brown belt grading opportunity. Flawless kata required."</p>
                </div>
            </div>
        </section>
        <section>
            <h2 class="font-display text-2xl font-bold text-foreground mb-6 flex items-center gap-2" style="opacity: 1;">
                <span class="text-primary">🏆</span> Previous Match Performance
            </h2>
            <div class="space-y-5">
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                        <div class="lg:col-span-5">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-display text-lg font-bold text-foreground">Regional Championship 2024
                                    </h3>
                                    <p class="text-xs text-muted-foreground">April 20, 2024 — Final</p>
                                </div><span
                                    class="text-xs font-display font-bold px-3 py-1 rounded-full border bg-green-500/20 border-green-500/40 text-green-400">Win</span>
                            </div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-foreground">8</p>
                                    <p class="text-[10px] text-muted-foreground">Ryu</p>
                                </div><span class="text-muted-foreground font-display text-lg">vs</span>
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-muted-foreground">3</p>
                                    <p class="text-[10px] text-muted-foreground">Kenji</p>
                                </div>
                            </div>
                            <div class="space-y-1 text-xs text-muted-foreground mb-3">
                                <p>👤 vs <span class="text-foreground">Kenji Yamamoto</span></p>
                                <p>🏛️ Iron Fist Dojo</p>
                                <p>🥋 Kata • ⏱ 3 min</p>
                            </div>
                            <div class="mb-3">
                                <p class="text-xs font-display font-semibold text-foreground mb-1.5">Highlights</p>
                                <div class="flex flex-wrap gap-1.5"><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Perfect
                                        roundhouse kick combo</span><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Strong
                                        defensive stance</span><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">3
                                        consecutive ippon scores</span></div>
                            </div>
                            <p class="text-xs text-muted-foreground italic border-t border-border pt-3">💬 "Outstanding
                                composure under pressure. Best performance this season."</p>
                        </div>
                        <div class="lg:col-span-4">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Match Ratings</p>
                            <div class="space-y-2">
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Technique</span><span
                                            class="text-foreground font-display font-bold">9</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 90%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Speed</span><span
                                            class="text-foreground font-display font-bold">8.5</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 85%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Power</span><span
                                            class="text-foreground font-display font-bold">7.8</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 78%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Defense</span><span
                                            class="text-foreground font-display font-bold">8.8</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 88%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Performance Map</p>
                            <div class="recharts-responsive-container" style="width: 100%; height: 180px; min-width: 0px;">
                                <div class="recharts-wrapper"
                                    style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 180px; max-width: 279px;">
                                    <svg cx="50%" cy="50%" class="recharts-surface" width="279" height="180"
                                        viewBox="0 0 279 180" style="width: 100%; height: 100%;">
                                        <title></title>
                                        <desc></desc>
                                        <defs>
                                            <clipPath id="recharts1-clip">
                                                <rect x="5" y="5" height="170" width="269"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-polar-grid">
                                            <g class="recharts-polar-grid-angle">
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="22"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="207.5" y2="90"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="158"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="71.5" y2="90.00000000000001"></line>
                                            </g>
                                            <g class="recharts-polar-grid-concentric">
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="0" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,90L 139.5,90L 139.5,90L 139.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="17" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,73L 156.5,90L 139.5,107L 122.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="34" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,56L 173.5,90L 139.5,124L 105.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="51" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,39L 190.5,90L 139.5,141L 88.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="68" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,22L 207.5,90L 139.5,158L 71.5,90.00000000000001Z"></path>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-angle-axis angleAxis">
                                            <path stroke="hsl(220 10% 55%)" font-size="11" cx="139.5" cy="90"
                                                orientation="outer" radius="68" fill="none"
                                                class="recharts-polygon angleAxis"
                                                d="M139.5,22L207.5,90L139.5,158L71.5,90.00000000000001L139.5,22Z"></path>
                                            <g class="recharts-layer recharts-polar-angle-axis-ticks">
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="22" x2="139.5" y2="14"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="14"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Technique</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="207.5" y1="90" x2="215.5" y2="90"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="215.5" y="90"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="start" fill="hsl(220 10% 55%)">
                                                        <tspan x="215.5" dy="0em">Speed</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="158" x2="139.5" y2="166"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="166"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Power</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="71.5" y1="90.00000000000001" x2="63.5" y2="90.00000000000001">
                                                    </line><text stroke="none" font-size="11" cx="139.5" cy="90"
                                                        orientation="outer" radius="68" x="63.5" y="90.00000000000001"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="end" fill="hsl(220 10% 55%)">
                                                        <tspan x="63.5" dy="0em">Defense</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-radius-axis radiusAxis">
                                            <line class="radiusAxis" stroke="hsl(220 15% 18%)" font-size="9"
                                                orientation="right" radius="68" fill="none" x1="139.5" y1="90"
                                                x2="187.58326112068522" y2="41.91673887931477"></line>
                                        </g>
                                        <g class="recharts-layer recharts-radar">
                                            <g class="recharts-layer recharts-radar-polygon">
                                                <path stroke="hsl(0 78% 52%)" fill="hsl(0 78% 52%)" fill-opacity="0.25"
                                                    stroke-width="2" class="recharts-polygon"
                                                    d="M139.5,28.799999999999997L197.3,90L139.5,143.04L79.66,90.00000000000001L139.5,28.799999999999997Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                        <div class="lg:col-span-5">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-display text-lg font-bold text-foreground">City Open 2024</h3>
                                    <p class="text-xs text-muted-foreground">March 10, 2024 — Semi-Final</p>
                                </div><span
                                    class="text-xs font-display font-bold px-3 py-1 rounded-full border bg-green-500/20 border-green-500/40 text-green-400">Win</span>
                            </div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-foreground">6</p>
                                    <p class="text-[10px] text-muted-foreground">Ryu</p>
                                </div><span class="text-muted-foreground font-display text-lg">vs</span>
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-muted-foreground">4</p>
                                    <p class="text-[10px] text-muted-foreground">Takeshi</p>
                                </div>
                            </div>
                            <div class="space-y-1 text-xs text-muted-foreground mb-3">
                                <p>👤 vs <span class="text-foreground">Takeshi Mori</span></p>
                                <p>🏛️ Rising Sun Academy</p>
                                <p>🥋 Kumite • ⏱ 3 min</p>
                            </div>
                            <div class="mb-3">
                                <p class="text-xs font-display font-semibold text-foreground mb-1.5">Highlights</p>
                                <div class="flex flex-wrap gap-1.5"><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Quick
                                        counter-attacks</span><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Effective
                                        footwork</span></div>
                            </div>
                            <p class="text-xs text-muted-foreground italic border-t border-border pt-3">💬 "Good aggression
                                but needs to manage stamina better in later rounds."</p>
                        </div>
                        <div class="lg:col-span-4">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Match Ratings</p>
                            <div class="space-y-2">
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Technique</span><span
                                            class="text-foreground font-display font-bold">7.5</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 75%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Speed</span><span
                                            class="text-foreground font-display font-bold">8.2</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 82%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Power</span><span
                                            class="text-foreground font-display font-bold">7</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 70%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Defense</span><span
                                            class="text-foreground font-display font-bold">7.5</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 75%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Performance Map</p>
                            <div class="recharts-responsive-container" style="width: 100%; height: 180px; min-width: 0px;">
                                <div class="recharts-wrapper"
                                    style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 180px; max-width: 279px;">
                                    <svg cx="50%" cy="50%" class="recharts-surface" width="279" height="180"
                                        viewBox="0 0 279 180" style="width: 100%; height: 100%;">
                                        <title></title>
                                        <desc></desc>
                                        <defs>
                                            <clipPath id="recharts3-clip">
                                                <rect x="5" y="5" height="170" width="269"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-polar-grid">
                                            <g class="recharts-polar-grid-angle">
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="22"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="207.5" y2="90"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="158"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="71.5" y2="90.00000000000001"></line>
                                            </g>
                                            <g class="recharts-polar-grid-concentric">
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="0" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,90L 139.5,90L 139.5,90L 139.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="17" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,73L 156.5,90L 139.5,107L 122.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="34" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,56L 173.5,90L 139.5,124L 105.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="51" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,39L 190.5,90L 139.5,141L 88.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="68" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,22L 207.5,90L 139.5,158L 71.5,90.00000000000001Z"></path>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-angle-axis angleAxis">
                                            <path stroke="hsl(220 10% 55%)" font-size="11" cx="139.5" cy="90"
                                                orientation="outer" radius="68" fill="none"
                                                class="recharts-polygon angleAxis"
                                                d="M139.5,22L207.5,90L139.5,158L71.5,90.00000000000001L139.5,22Z"></path>
                                            <g class="recharts-layer recharts-polar-angle-axis-ticks">
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="22" x2="139.5" y2="14"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="14"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Technique</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="207.5" y1="90" x2="215.5" y2="90"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="215.5" y="90"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="start" fill="hsl(220 10% 55%)">
                                                        <tspan x="215.5" dy="0em">Speed</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="158" x2="139.5" y2="166"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="166"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Power</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="71.5" y1="90.00000000000001" x2="63.5" y2="90.00000000000001">
                                                    </line><text stroke="none" font-size="11" cx="139.5" cy="90"
                                                        orientation="outer" radius="68" x="63.5" y="90.00000000000001"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="end" fill="hsl(220 10% 55%)">
                                                        <tspan x="63.5" dy="0em">Defense</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-radius-axis radiusAxis">
                                            <line class="radiusAxis" stroke="hsl(220 15% 18%)" font-size="9"
                                                orientation="right" radius="68" fill="none" x1="139.5" y1="90"
                                                x2="187.58326112068522" y2="41.91673887931477"></line>
                                        </g>
                                        <g class="recharts-layer recharts-radar">
                                            <g class="recharts-layer recharts-radar-polygon">
                                                <path stroke="hsl(0 78% 52%)" fill="hsl(0 78% 52%)" fill-opacity="0.25"
                                                    stroke-width="2" class="recharts-polygon"
                                                    d="M139.5,39L195.26,90L139.5,137.6L88.5,90L139.5,39Z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                        <div class="lg:col-span-5">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-display text-lg font-bold text-foreground">City Open 2024</h3>
                                    <p class="text-xs text-muted-foreground">March 10, 2024 — Final</p>
                                </div><span
                                    class="text-xs font-display font-bold px-3 py-1 rounded-full border bg-destructive/20 border-destructive/40 text-destructive">Loss</span>
                            </div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-foreground">4</p>
                                    <p class="text-[10px] text-muted-foreground">Ryu</p>
                                </div><span class="text-muted-foreground font-display text-lg">vs</span>
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-muted-foreground">6</p>
                                    <p class="text-[10px] text-muted-foreground">Hiroshi</p>
                                </div>
                            </div>
                            <div class="space-y-1 text-xs text-muted-foreground mb-3">
                                <p>👤 vs <span class="text-foreground">Hiroshi Sato</span></p>
                                <p>🏛️ Tiger Claw Martial Arts</p>
                                <p>🥋 Kumite • ⏱ 3 min</p>
                            </div>
                            <div class="mb-3">
                                <p class="text-xs font-display font-semibold text-foreground mb-1.5">Highlights</p>
                                <div class="flex flex-wrap gap-1.5"><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Strong
                                        opening round</span></div>
                            </div>
                            <p class="text-xs text-muted-foreground italic border-t border-border pt-3">💬 "Lost focus in
                                the final minute. Need to work on closing out matches."</p>
                        </div>
                        <div class="lg:col-span-4">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Match Ratings</p>
                            <div class="space-y-2">
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Technique</span><span
                                            class="text-foreground font-display font-bold">7</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 70%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Speed</span><span
                                            class="text-foreground font-display font-bold">7.5</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 75%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Power</span><span
                                            class="text-foreground font-display font-bold">7.2</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 72%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Defense</span><span
                                            class="text-foreground font-display font-bold">6.5</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 65%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Performance Map</p>
                            <div class="recharts-responsive-container" style="width: 100%; height: 180px; min-width: 0px;">
                                <div class="recharts-wrapper"
                                    style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 180px; max-width: 279px;">
                                    <svg cx="50%" cy="50%" class="recharts-surface" width="279" height="180"
                                        viewBox="0 0 279 180" style="width: 100%; height: 100%;">
                                        <title></title>
                                        <desc></desc>
                                        <defs>
                                            <clipPath id="recharts5-clip">
                                                <rect x="5" y="5" height="170" width="269"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-polar-grid">
                                            <g class="recharts-polar-grid-angle">
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="22"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="207.5" y2="90"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="158"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="71.5" y2="90.00000000000001"></line>
                                            </g>
                                            <g class="recharts-polar-grid-concentric">
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="0" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,90L 139.5,90L 139.5,90L 139.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="17" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,73L 156.5,90L 139.5,107L 122.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="34" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,56L 173.5,90L 139.5,124L 105.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="51" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,39L 190.5,90L 139.5,141L 88.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="68" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,22L 207.5,90L 139.5,158L 71.5,90.00000000000001Z"></path>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-angle-axis angleAxis">
                                            <path stroke="hsl(220 10% 55%)" font-size="11" cx="139.5" cy="90"
                                                orientation="outer" radius="68" fill="none"
                                                class="recharts-polygon angleAxis"
                                                d="M139.5,22L207.5,90L139.5,158L71.5,90.00000000000001L139.5,22Z"></path>
                                            <g class="recharts-layer recharts-polar-angle-axis-ticks">
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="22" x2="139.5" y2="14"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="14"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Technique</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="207.5" y1="90" x2="215.5" y2="90"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="215.5" y="90"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="start" fill="hsl(220 10% 55%)">
                                                        <tspan x="215.5" dy="0em">Speed</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="158" x2="139.5" y2="166"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="166"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Power</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="71.5" y1="90.00000000000001" x2="63.5" y2="90.00000000000001">
                                                    </line><text stroke="none" font-size="11" cx="139.5" cy="90"
                                                        orientation="outer" radius="68" x="63.5" y="90.00000000000001"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="end" fill="hsl(220 10% 55%)">
                                                        <tspan x="63.5" dy="0em">Defense</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-radius-axis radiusAxis">
                                            <line class="radiusAxis" stroke="hsl(220 15% 18%)" font-size="9"
                                                orientation="right" radius="68" fill="none" x1="139.5" y1="90"
                                                x2="187.58326112068522" y2="41.91673887931477"></line>
                                        </g>
                                        <g class="recharts-layer recharts-radar">
                                            <g class="recharts-layer recharts-radar-polygon">
                                                <path stroke="hsl(0 78% 52%)" fill="hsl(0 78% 52%)" fill-opacity="0.25"
                                                    stroke-width="2" class="recharts-polygon"
                                                    d="M139.5,42.400000000000006L190.5,90L139.5,138.96L95.3,90L139.5,42.400000000000006Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                        <div class="lg:col-span-5">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-display text-lg font-bold text-foreground">Academy Tournament 2023</h3>
                                    <p class="text-xs text-muted-foreground">November 18, 2023 — Final</p>
                                </div><span
                                    class="text-xs font-display font-bold px-3 py-1 rounded-full border bg-green-500/20 border-green-500/40 text-green-400">Win</span>
                            </div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-foreground">7</p>
                                    <p class="text-[10px] text-muted-foreground">Ryu</p>
                                </div><span class="text-muted-foreground font-display text-lg">vs</span>
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-muted-foreground">2</p>
                                    <p class="text-[10px] text-muted-foreground">Yuto</p>
                                </div>
                            </div>
                            <div class="space-y-1 text-xs text-muted-foreground mb-3">
                                <p>👤 vs <span class="text-foreground">Yuto Nakamura</span></p>
                                <p>🏛️ Dragon Spirit Martial Arts Academy</p>
                                <p>🥋 Kata • ⏱ 3 min</p>
                            </div>
                            <div class="mb-3">
                                <p class="text-xs font-display font-semibold text-foreground mb-1.5">Highlights</p>
                                <div class="flex flex-wrap gap-1.5"><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Flawless
                                        kata execution</span><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Dominant
                                        from start to finish</span></div>
                            </div>
                            <p class="text-xs text-muted-foreground italic border-t border-border pt-3">💬 "Textbook
                                performance. Showed significant growth."</p>
                        </div>
                        <div class="lg:col-span-4">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Match Ratings</p>
                            <div class="space-y-2">
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Technique</span><span
                                            class="text-foreground font-display font-bold">9.2</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 92%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Speed</span><span
                                            class="text-foreground font-display font-bold">8</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 80%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Power</span><span
                                            class="text-foreground font-display font-bold">8</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 80%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Defense</span><span
                                            class="text-foreground font-display font-bold">8.5</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 85%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Performance Map</p>
                            <div class="recharts-responsive-container" style="width: 100%; height: 180px; min-width: 0px;">
                                <div class="recharts-wrapper"
                                    style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 180px; max-width: 279px;">
                                    <svg cx="50%" cy="50%" class="recharts-surface" width="279" height="180"
                                        viewBox="0 0 279 180" style="width: 100%; height: 100%;">
                                        <title></title>
                                        <desc></desc>
                                        <defs>
                                            <clipPath id="recharts7-clip">
                                                <rect x="5" y="5" height="170" width="269"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-polar-grid">
                                            <g class="recharts-polar-grid-angle">
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="22"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="207.5" y2="90"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="158"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="71.5" y2="90.00000000000001"></line>
                                            </g>
                                            <g class="recharts-polar-grid-concentric">
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="0" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,90L 139.5,90L 139.5,90L 139.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="17" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,73L 156.5,90L 139.5,107L 122.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="34" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,56L 173.5,90L 139.5,124L 105.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="51" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,39L 190.5,90L 139.5,141L 88.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="68" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,22L 207.5,90L 139.5,158L 71.5,90.00000000000001Z"></path>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-angle-axis angleAxis">
                                            <path stroke="hsl(220 10% 55%)" font-size="11" cx="139.5" cy="90"
                                                orientation="outer" radius="68" fill="none"
                                                class="recharts-polygon angleAxis"
                                                d="M139.5,22L207.5,90L139.5,158L71.5,90.00000000000001L139.5,22Z"></path>
                                            <g class="recharts-layer recharts-polar-angle-axis-ticks">
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="22" x2="139.5" y2="14"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="14"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Technique</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="207.5" y1="90" x2="215.5" y2="90"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="215.5" y="90"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="start" fill="hsl(220 10% 55%)">
                                                        <tspan x="215.5" dy="0em">Speed</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="158" x2="139.5" y2="166"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="166"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Power</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="71.5" y1="90.00000000000001" x2="63.5" y2="90.00000000000001">
                                                    </line><text stroke="none" font-size="11" cx="139.5" cy="90"
                                                        orientation="outer" radius="68" x="63.5" y="90.00000000000001"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="end" fill="hsl(220 10% 55%)">
                                                        <tspan x="63.5" dy="0em">Defense</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-radius-axis radiusAxis">
                                            <line class="radiusAxis" stroke="hsl(220 15% 18%)" font-size="9"
                                                orientation="right" radius="68" fill="none" x1="139.5" y1="90"
                                                x2="187.58326112068522" y2="41.91673887931477"></line>
                                        </g>
                                        <g class="recharts-layer recharts-radar">
                                            <g class="recharts-layer recharts-radar-polygon">
                                                <path stroke="hsl(0 78% 52%)" fill="hsl(0 78% 52%)" fill-opacity="0.25"
                                                    stroke-width="2" class="recharts-polygon"
                                                    d="M139.5,27.439999999999998L193.9,90L139.5,144.4L81.7,90L139.5,27.439999999999998Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-card rounded-xl border border-border p-5" style="opacity: 1; transform: none;">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                        <div class="lg:col-span-5">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="font-display text-lg font-bold text-foreground">Inter-School Challenge 2023
                                    </h3>
                                    <p class="text-xs text-muted-foreground">September 5, 2023 — Quarter-Final</p>
                                </div><span
                                    class="text-xs font-display font-bold px-3 py-1 rounded-full border bg-destructive/20 border-destructive/40 text-destructive">Loss</span>
                            </div>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-foreground">3</p>
                                    <p class="text-[10px] text-muted-foreground">Ryu</p>
                                </div><span class="text-muted-foreground font-display text-lg">vs</span>
                                <div class="text-center">
                                    <p class="font-display text-3xl font-bold text-muted-foreground">5</p>
                                    <p class="text-[10px] text-muted-foreground">Daichi</p>
                                </div>
                            </div>
                            <div class="space-y-1 text-xs text-muted-foreground mb-3">
                                <p>👤 vs <span class="text-foreground">Daichi Ono</span></p>
                                <p>🏛️ Phoenix Combat Academy</p>
                                <p>🥋 Kumite • ⏱ 3 min</p>
                            </div>
                            <div class="mb-3">
                                <p class="text-xs font-display font-semibold text-foreground mb-1.5">Highlights</p>
                                <div class="flex flex-wrap gap-1.5"><span
                                        class="text-[10px] bg-secondary px-2 py-0.5 rounded-full text-foreground">Good
                                        defensive blocks</span></div>
                            </div>
                            <p class="text-xs text-muted-foreground italic border-t border-border pt-3">💬 "Opponent was
                                more experienced. Ryu showed resilience despite the loss."</p>
                        </div>
                        <div class="lg:col-span-4">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Match Ratings</p>
                            <div class="space-y-2">
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Technique</span><span
                                            class="text-foreground font-display font-bold">6.8</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 68%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Speed</span><span
                                            class="text-foreground font-display font-bold">7</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 70%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Power</span><span
                                            class="text-foreground font-display font-bold">6.5</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 65%;">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-xs mb-0.5"><span
                                            class="text-muted-foreground">Defense</span><span
                                            class="text-foreground font-display font-bold">7.8</span></div>
                                    <div class="w-full h-1.5 bg-secondary rounded-full overflow-hidden">
                                        <div class="h-full rounded-full"
                                            style="background: linear-gradient(90deg, rgb(228, 37, 37), rgb(244, 185, 37)); width: 78%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <p class="text-xs font-display font-semibold text-foreground mb-2">Performance Map</p>
                            <div class="recharts-responsive-container" style="width: 100%; height: 180px; min-width: 0px;">
                                <div class="recharts-wrapper"
                                    style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 180px; max-width: 279px;">
                                    <svg cx="50%" cy="50%" class="recharts-surface" width="279" height="180"
                                        viewBox="0 0 279 180" style="width: 100%; height: 100%;">
                                        <title></title>
                                        <desc></desc>
                                        <defs>
                                            <clipPath id="recharts9-clip">
                                                <rect x="5" y="5" height="170" width="269"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-polar-grid">
                                            <g class="recharts-polar-grid-angle">
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="22"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="207.5" y2="90"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="139.5" y2="158"></line>
                                                <line stroke="hsl(220 15% 18%)" cx="139.5" cy="90" x1="139.5" y1="90"
                                                    x2="71.5" y2="90.00000000000001"></line>
                                            </g>
                                            <g class="recharts-polar-grid-concentric">
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="0" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,90L 139.5,90L 139.5,90L 139.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="17" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,73L 156.5,90L 139.5,107L 122.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="34" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,56L 173.5,90L 139.5,124L 105.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="51" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,39L 190.5,90L 139.5,141L 88.5,90Z"></path>
                                                <path stroke="hsl(220 15% 18%)" cx="139.5" cy="90" radius="68" fill="none"
                                                    class="recharts-polar-grid-concentric-polygon"
                                                    d="M 139.5,22L 207.5,90L 139.5,158L 71.5,90.00000000000001Z"></path>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-angle-axis angleAxis">
                                            <path stroke="hsl(220 10% 55%)" font-size="11" cx="139.5" cy="90"
                                                orientation="outer" radius="68" fill="none"
                                                class="recharts-polygon angleAxis"
                                                d="M139.5,22L207.5,90L139.5,158L71.5,90.00000000000001L139.5,22Z"></path>
                                            <g class="recharts-layer recharts-polar-angle-axis-ticks">
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="22" x2="139.5" y2="14"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="14"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Technique</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="207.5" y1="90" x2="215.5" y2="90"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="215.5" y="90"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="start" fill="hsl(220 10% 55%)">
                                                        <tspan x="215.5" dy="0em">Speed</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="139.5" y1="158" x2="139.5" y2="166"></line><text stroke="none"
                                                        font-size="11" cx="139.5" cy="90" orientation="outer" radius="68"
                                                        x="139.5" y="166"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="middle" fill="hsl(220 10% 55%)">
                                                        <tspan x="139.5" dy="0em">Power</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-polar-angle-axis-tick">
                                                    <line class="angleAxis" stroke="hsl(220 10% 55%)" font-size="11"
                                                        cx="139.5" cy="90" orientation="outer" radius="68" fill="none"
                                                        x1="71.5" y1="90.00000000000001" x2="63.5" y2="90.00000000000001">
                                                    </line><text stroke="none" font-size="11" cx="139.5" cy="90"
                                                        orientation="outer" radius="68" x="63.5" y="90.00000000000001"
                                                        class="recharts-text recharts-polar-angle-axis-tick-value"
                                                        text-anchor="end" fill="hsl(220 10% 55%)">
                                                        <tspan x="63.5" dy="0em">Defense</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-polar-radius-axis radiusAxis">
                                            <line class="radiusAxis" stroke="hsl(220 15% 18%)" font-size="9"
                                                orientation="right" radius="68" fill="none" x1="139.5" y1="90"
                                                x2="187.58326112068522" y2="41.91673887931477"></line>
                                        </g>
                                        <g class="recharts-layer recharts-radar">
                                            <g class="recharts-layer recharts-radar-polygon">
                                                <path stroke="hsl(0 78% 52%)" fill="hsl(0 78% 52%)" fill-opacity="0.25"
                                                    stroke-width="2" class="recharts-polygon"
                                                    d="M139.5,43.76L187.1,90L139.5,134.2L86.46000000000001,90L139.5,43.76Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection