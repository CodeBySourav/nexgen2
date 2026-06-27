@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="space-y-6 font-sans antialiased text-gray-700 bg-[#f4f7f6] p-4 min-h-screen">

        <!-- 1. TOP ROW: BANNER & LINE CHART -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- Promo Banner (Left) -->
            <div
                class="lg:col-span-5 bg-[#4cb790] rounded-2xl p-6 relative overflow-hidden flex flex-col justify-between text-white min-h-[260px] shadow-sm select-none">

                <!-- TOP SEGMENT: METADATA & HEADERS -->
                <div class="z-10 max-w-[65%] space-y-2">
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-300 animate-pulse"></span>
                        <span class="text-[10px] font-bold tracking-widest text-emerald-100 uppercase opacity-90">Corporate
                            Hub</span>
                    </div>

                    <h2 class="text-xl lg:text-2xl font-black tracking-tight leading-tight drop-shadow-sm">
                        Oceano Apex
                    </h2>

                    <p class="text-[11px] text-emerald-50/90 leading-relaxed font-medium">
                        A boutique wealth management firm offering personalised financial solutions. Uncompromising
                        standards, lasting growth.
                    </p>
                </div>

                <!-- BOTTOM SEGMENT: ACTIVE INDICATOR FOOTER -->
                <div class="z-10 flex items-center gap-2 mt-4">
                    <span
                        class="text-[10px] font-bold bg-white bg-opacity-20 backdrop-blur-md text-white px-2.5 py-1 rounded-lg border border-white border-opacity-10 shadow-sm">
                        Est. 2015
                    </span>
                    <span class="text-[10px] font-bold text-emerald-100 opacity-75">
                        Global Operations Portal
                    </span>
                </div>

                <!-- RIGHT SIDE GEOMETRIC ASSET PANEL: Replaced bad image with clean CSS/SVG architecture -->
                <div
                    class="absolute bottom-0 right-0 w-[45%] h-full z-0 opacity-25 pointer-events-none flex items-end justify-end">
                    <svg class="w-full h-[85%] text-white" viewBox="0 0 200 200" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <!-- Abstract multi-layered bar graph matching your layout's core theme -->
                        <rect x="20" y="120" width="24" height="80" rx="4" fill="currentColor"
                            opacity="0.3" />
                        <rect x="52" y="80" width="24" height="120" rx="4" fill="currentColor"
                            opacity="0.5" />
                        <rect x="84" y="40" width="24" height="160" rx="4" fill="currentColor"
                            opacity="0.7" />
                        <rect x="116" y="95" width="24" height="105" rx="4" fill="currentColor"
                            opacity="0.4" />
                        <rect x="148" y="15" width="24" height="185" rx="4" fill="currentColor"
                            opacity="0.9" />

                        <!-- Elegant sweeping trendline overlay -->
                        <path d="M20 115 C 60 70, 100 45, 148 10" stroke="currentColor" stroke-width="4"
                            stroke-linecap="round" fill="none" opacity="0.8" />
                        <circle cx="148" cy="10" r="6" fill="currentColor" />
                    </svg>
                </div>

                <!-- HIGH-END DECORATIVE ABSTRACT BACKDROP LAYER -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-white to-transparent opacity-[0.05] rounded-bl-full pointer-events-none">
                </div>
                <div
                    class="absolute -bottom-10 -left-10 w-36 h-36 bg-emerald-400 opacity-20 rounded-full blur-xl pointer-events-none">
                </div>
            </div>

            <!-- Google Ranking & Visibility Analytics Chart -->
            <div
                class="lg:col-span-7 bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between min-h-[260px]">

                <!-- Header Block: Contextualized for SEO Admin -->
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h3 class="font-bold text-gray-800 text-sm tracking-tight">Search Performance</h3>
                        <p class="text-[10px] text-gray-400 font-medium">Google Search Console Core Data</p>
                    </div>

                    <!-- Updated Legends to reflect Search Rankings -->
                    <div class="flex items-center space-x-4 text-xs font-medium">
                        <span class="flex items-center gap-1.5 text-gray-500">
                            <span class="w-2.5 h-2.5 rounded-full border-2 border-[#4cb790] bg-white"></span>Organic Clicks
                        </span>
                        <span class="flex items-center gap-1.5 text-gray-500">
                            <span class="w-2.5 h-2.5 rounded-full border-2 border-[#ff6d55] bg-white"></span> Avg. Position
                        </span>
                    </div>
                </div>

                <!-- SVG Analytics Graph Wrapper -->
                <div class="h-40 flex items-end relative border-b border-l border-gray-100 px-2 pt-4">

                    <!-- Subtle horizontal grid lines for an authentic dashboard feel -->
                    <div
                        class="absolute inset-x-0 top-4 bottom-0 flex flex-col justify-between pointer-events-none opacity-40">
                        <div class="border-b border-dashed border-gray-100 w-full h-0"></div>
                        <div class="border-b border-dashed border-gray-100 w-full h-0"></div>
                        <div class="border-b border-dashed border-gray-100 w-full h-0"></div>
                        <div class="w-full h-0"></div> <!-- Baseline -->
                    </div>

                    <!-- SVG Graph: Clean ranking lines over the grid -->
                    <svg class="w-full h-full overflow-visible z-10" viewBox="0 0 600 120" preserveAspectRatio="none">
                        <!-- Keyword Visibility Trend (Green Line) -->
                        <path d="M 10 70 L 110 55 L 210 35 L 310 80 L 410 65 L 510 20 L 590 20" fill="none"
                            stroke="#4cb790" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />

                        <!-- Average SERP Position Curve (Coral Line) -->
                        <path d="M 10 95 L 110 80 L 210 95 L 310 50 L 410 20 L 510 20 L 590 5" fill="none"
                            stroke="#ff6d55" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <!-- X-Axis Timeline Labels (Shifted to a broader weekly/monthly monitoring interval) -->
                    <div
                        class="absolute -bottom-6 left-0 right-0 flex justify-between text-[10px] text-gray-400 font-medium px-1">
                        <span>Jan</span>
                        <span>Feb</span>
                        <span>Mar</span>
                        <span>Apr</span>
                        <span>May</span>
                        <span>Jun</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. THREE STATS CARDS ROW -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Stat 1: All Courses -->
            <a href="{{ route('posts.index') }}" class="block">
                <div
                    class="bg-[#4cb790] text-white p-5 rounded-xl flex justify-between items-center relative overflow-hidden shadow-sm">
                    <div class="flex items-center space-x-4 z-10">
                        <div class="p-2 bg-white bg-opacity-20 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-black leading-tight">{{ $totalPosts }}</h2>
                            <p class="text-[11px] text-emerald-100 font-semibold opacity-90">Blogs</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Stat 2: Upcoming (Dynamic Post Value) -->
            <a href="{{ route('pages.index') }}" class="block">
                <div
                    class="bg-[#1f252d] text-white p-5 rounded-xl flex justify-between items-center relative overflow-hidden shadow-sm">
                    <div class="flex items-center space-x-4 z-10">
                        <div class="p-2 bg-white bg-opacity-10 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-black leading-tight">{{ $totalPages }}</h2>
                            <p class="text-[11px] text-gray-400 font-semibold opacity-90">Pages</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Stat 3: Progress Courses (Dynamic Pages Value) -->
            <a href="{{ route('users.index') }}" class="block">
                <div
                    class="bg-[#ff6d55] text-white p-5 rounded-xl flex justify-between items-center relative overflow-hidden shadow-sm">
                    <div class="flex items-center space-x-4 z-10">
                        <div class="p-2 bg-white bg-opacity-20 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-black leading-tight">{{ $totalEditor }}</h2>
                            <p class="text-[11px] text-orange-100 font-semibold opacity-90">Editor</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- 3. MIDDLE FULL-WIDTH ROW: CONTENT PRODUCTION & INDEXATION GRAPH -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 w-full select-none">

            <!-- Top Segment: Header, Analytics Context, & Interactive Filter -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                <div>
                    <h3 class="font-bold text-gray-800 text-base tracking-tight">Content Distribution</h3>
                    <p class="text-[11px] text-gray-400 font-medium">Tracking newly published articles and structural site
                        pages</p>
                </div>

                <!-- Controls: Legends and Year Filter Dropdown -->
                <div
                    class="flex flex-wrap items-center gap-4 sm:gap-6 text-xs font-medium self-stretch sm:self-auto justify-between sm:justify-start">
                    <div class="flex items-center space-x-4">
                        <span class="flex items-center gap-1.5 text-gray-500">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#4cb790]"></span> Blog Posts
                        </span>
                        <span class="flex items-center gap-1.5 text-gray-500">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#ff6d55]"></span> Site Pages
                        </span>
                    </div>

                    <!-- Native Dropdown for Year Selection -->
                    <div class="relative">
                        <select onchange="window.location='?year='+this.value"
                            class="appearance-none bg-gray-50 border border-gray-200 text-gray-700 py-1.5 pl-3 pr-8 rounded-lg text-xs">

                            @for ($y = now()->year; $y >= 2024; $y--)
                                <option value="{{ $y }}" {{ $year == $y ? 'selected' : '' }}>
                                    {{ $y }}
                                </option>
                            @endfor
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Bar Chart Grid Layout -->
            <div class="pt-4 flex justify-between items-end h-52 px-2 pl-8 relative border-b border-gray-100">

                <!-- Y Axis Background Reference Indicators & Grid Lines -->
                @php
                    $steps = 4;
                @endphp

                <div class="absolute left-0 top-4 bottom-0 w-full flex flex-col justify-between pointer-events-none">
                    @for ($i = $steps; $i >= 0; $i--)
                        <div class="w-full flex items-center text-[10px] text-gray-300 font-medium">
                            <span class="w-6 -ml-8 text-right pr-2">
                                {{ round(($maxValue * $i) / $steps) }}
                            </span>

                            <div class="w-full {{ $i != 0 ? 'border-b border-dashed border-gray-100' : '' }}"></div>
                        </div>
                    @endfor
                </div>

                <!-- Dynamic Month Blocks -->
                @foreach ($chartData as $item)
                    @php
                        $postHeight = ($item['posts'] / $maxValue) * 160;
                        $pageHeight = ($item['pages'] / $maxValue) * 160;
                    @endphp

                    <div class="flex flex-col items-center gap-1.5 z-10 group">
                        <div class="flex items-end gap-1">

                            <div class="w-3.5 bg-[#4cb790] rounded-t-sm transition-all duration-300"
                                style="height: {{ $postHeight }}px" title="{{ $item['posts'] }} Posts">
                            </div>

                            <div class="w-3.5 bg-[#ff6d55] rounded-t-sm transition-all duration-300"
                                style="height: {{ $pageHeight }}px" title="{{ $item['pages'] }} Pages">
                            </div>

                        </div>

                        <span class="text-[10px] font-semibold text-gray-400">
                            {{ $item['month'] }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- 4. BOTTOM ROW: PROGRESS (LEFT) & CALENDAR (RIGHT) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- My Progress Box (lg:col-span-4) -->
            <div
                class="lg:col-span-4 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center justify-center text-center">
                <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-4">My Progress</h4>

                <div class="relative w-28 h-28 flex items-center justify-center">
                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                        <path class="text-gray-100" stroke-width="3" stroke="currentColor" fill="none"
                            d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        <path class="text-[#ff6d55]" stroke-dasharray="75, 100" stroke-width="3" stroke-linecap="round"
                            stroke="currentColor" fill="none"
                            d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                    </svg>
                    <span class="absolute text-xl font-black text-gray-800">75%</span>
                </div>

                <p class="text-[11px] text-gray-400 mt-4 max-w-[80%]">Lorem ipsum dolor sit amet, consectetur.</p>
                <button
                    class="mt-4 w-full bg-[#ff6d55] text-white font-bold text-xs py-2.5 rounded-xl hover:bg-[#e25c45] transition">More
                    Details</button>
            </div>

            <!-- Full Sized Calendar Panel (lg:col-span-8) -->
            <div class="lg:col-span-8 bg-[#ff6d55] text-white p-6 rounded-2xl shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-center border-b border-white border-opacity-20 pb-3 mb-4">
                    <button class="font-bold hover:opacity-70">&lt;</button>
                    <span class="text-xs font-bold tracking-wide uppercase">June 2026</span>
                    <button class="font-bold hover:opacity-70">&gt;</button>
                </div>

                <div class="grid grid-cols-7 gap-y-4 text-center text-xs font-medium">
                    <span class="opacity-60 font-bold">Su</span><span class="opacity-60 font-bold">Mo</span><span
                        class="opacity-60 font-bold">Tu</span><span class="opacity-60 font-bold">We</span><span
                        class="opacity-60 font-bold">Th</span><span class="opacity-60 font-bold">Fr</span><span
                        class="opacity-60 font-bold">Sa</span>

                    <span
                        class="opacity-40">31</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span>
                    <span>7</span><span>8</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span>
                    <span>14</span><span>15</span><span>16</span><span>17</span><span>18</span><span>19</span><span>20</span>
                    <span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span>

                    <!-- Match active background day exactly -->
                    <span class="bg-white text-[#ff6d55] font-black rounded-lg py-1 shadow-sm">27</span>
                    <span>28</span><span>29</span><span>30</span><span class="opacity-40">1</span><span
                        class="opacity-40">2</span><span class="opacity-40">3</span>
                </div>
            </div>

        </div>

    </div>
@endsection
