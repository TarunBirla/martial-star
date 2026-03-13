document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("skillChart");

    new Chart(ctx, {
        type: "line",

        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],

            datasets: [
                {
                    label: "Score",
                    data: [60, 68, 75, 83, 79, 85, 89],

                    borderColor: "#ff2d2d",
                    borderWidth: 4,
                    tension: 0.4,

                    pointRadius: 5,
                    pointHoverRadius: 8,

                    pointBackgroundColor: "#ff2d2d",
                    pointBorderColor: "#ffcc00",
                    pointBorderWidth: 3,
                },
            ],
        },

        options: {
            interaction: {
                mode: "index",
                intersect: false,
            },

            plugins: {
                legend: { display: false },

                tooltip: {
                    backgroundColor: "#1f2937",
                    borderColor: "#4b5563",
                    borderWidth: 1,
                    titleColor: "#ffffff",
                    bodyColor: "#ff2d2d",
                    padding: 12,
                    displayColors: false,

                    callbacks: {
                        label: function (context) {
                            return "Score : " + context.parsed.y;
                        },
                    },
                },
            },

            scales: {
                y: {
                    min: 0,
                    max: 100,

                    ticks: {
                        stepSize: 25,
                        color: "#9ca3af",
                    },

                    grid: {
                        color: "#374151",
                        borderDash: [4, 4],
                    },
                },

                x: {
                    ticks: {
                        color: "#9ca3af",
                    },

                    grid: {
                        color: "#374151",
                        borderDash: [4, 4],
                    },
                },
            },
        },
    });
});

const ctx = document.getElementById("fighterChart");

new Chart(ctx, {
    type: "radar",
    data: {
        labels: ["Punch", "Kick", "Defence", "Balance", "Speed", "Power"],
        datasets: [
            {
                label: "Fighter Skills",
                data: [80, 65, 75, 85, 70, 78],
                backgroundColor: "rgba(239, 68, 68, 0.25)",
                borderColor: "rgba(239, 68, 68, 1)",
                borderWidth: 2,
                pointBackgroundColor: "rgba(239, 68, 68, 1)",
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            r: {
                min: 0,
                max: 100,
                ticks: {
                    stepSize: 25,
                    backdropColor: "transparent",
                },
                grid: {
                    color: "hsl(220 15% 18%)",
                },
                angleLines: {
                    color: "hsl(220 15% 18%)",
                },
                pointLabels: {
                    color: "hsl(220 10% 55%)",
                    font: {
                        size: 12,
                    },
                },
            },
        },
        plugins: {
            legend: {
                display: false,
            },
        },
    },
});

const attendanceCtx = document.getElementById("attendanceChart");

new Chart(attendanceCtx, {
    type: "bar",
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
            {
                label: "Present",
                data: [12, 10, 14, 13, 11, 14],
                backgroundColor: "hsl(0 78% 52%)",
                borderRadius: 4,
                barThickness: 30,
            },
            {
                label: "Absent",
                data: [14, 12, 15, 14, 13, 14],
                backgroundColor: "hsl(220 15% 22%)",
                borderRadius: 4,
                barThickness: 30,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
        },
        scales: {
            x: {
                grid: {
                    color: "hsl(220 15% 18%)",
                    borderDash: [3, 3],
                },
                ticks: {
                    color: "hsl(220 10% 55%)",
                },
            },
            y: {
                min: 0,
                max: 16,
                ticks: {
                    stepSize: 4,
                    color: "hsl(220 10% 55%)",
                },
                grid: {
                    color: "hsl(220 15% 18%)",
                    borderDash: [3, 3],
                },
            },
        },
    },
});
const skillCtx = document.getElementById("skillChartdev");

new Chart(skillCtx, {
    type: "line",
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [
            {
                label: "Punch",
                data: [55, 60, 65, 68, 72, 75],
                borderColor: "hsl(200 80% 55%)",
                tension: 0.4,
            },
            {
                label: "Kick",
                data: [60, 63, 66, 70, 73, 76],
                borderColor: "hsl(0 78% 52%)",
                tension: 0.4,
            },
            {
                label: "Defence",
                data: [50, 55, 60, 65, 68, 72],
                borderColor: "hsl(43 90% 55%)",
                tension: 0.4,
            },
            {
                label: "Speed",
                data: [58, 65, 72, 78, 80, 85],
                borderColor: "hsl(142 71% 45%)",
                tension: 0.4,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
        },
        scales: {
            x: {
                grid: {
                    color: "hsl(220 15% 18%)",
                    borderDash: [3, 3],
                },
                ticks: {
                    color: "hsl(220 10% 55%)",
                },
            },
            y: {
                min: 0,
                max: 100,
                ticks: {
                    stepSize: 25,
                    color: "hsl(220 10% 55%)",
                },
                grid: {
                    color: "hsl(220 15% 18%)",
                    borderDash: [3, 3],
                },
            },
        },
    },
});



Chart.register({
    id: "verticalLine",

    afterDraw(chart) {
        if (chart.tooltip?._active?.length) {
            const ctx = chart.ctx;
            const x = chart.tooltip._active[0].element.x;
            const topY = chart.scales.y.top;
            const bottomY = chart.scales.y.bottom;

            ctx.save();

            ctx.beginPath();
            ctx.moveTo(x, topY);
            ctx.lineTo(x, bottomY);

            ctx.lineWidth = 2;
            ctx.strokeStyle = "#ffffff";

            ctx.stroke();
            ctx.restore();
        }
    },
});
