<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PDF</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f9fafb;
            color: #374151;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #4f46e5;
            color: #ffffff;
            padding: 20px 30px;
            text-align: center;
        }
        .header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .header p {
            font-size: 1.1rem;
            margin-bottom: 0;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            padding: 20px 30px;
            gap: 20px;
        }
        .stat-card {
            flex: 1;
            background-color: #eef2ff;
            border-radius: 8px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        .stat-card h2 {
            font-size: 2.5rem;
            color: #4f46e5;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .stat-card p {
            font-size: 1rem;
            color: #6b7280;
        }
        .comments-section {
            padding: 20px 30px;
            background-color: #f3f4f6;
        }
        .comments-section h2 {
            font-size: 1.5rem;
            color: #111827;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .comment {
            background-color: #ffffff;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .comment h3 {
            font-size: 1rem;
            color: #374151;
            font-weight: bold;
        }
        .comment p {
            font-size: 0.9rem;
            color: #6b7280;
            margin: 5px 0 10px 0;
        }
        .comment .text {
            font-size: 1rem;
            color: #374151;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1>Dashboard Overview</h1>
            <p>Welcome, Here's your latest activity.</p>
        </div>

        <!-- Stats Section -->
        <div class="stats">
            <div class="stat-card">
                <h2>45K+</h2>
                <p>Visits</p>
            </div>
            <div class="stat-card">
                <h2>78K+</h2>
                <p>Views</p>
            </div>
            <div class="stat-card">
                <h2>23</h2>
                <p>Messages</p>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="comments-section">
            <h2>Recent Comments</h2>
            @forelse ($comments as $comment)
                <div class="comment">
                    <h3>{{ $comment['name'] }}</h3>
                    <p>{{ $comment['created_at']->format('F d, Y') }}</p>
                    <div class="text">{{ $comment['comment'] }}</div>
                </div>
            @empty
                <p>No comments yet. Be the first to comment!</p>
            @endforelse
        </div>
    </div>
</body>
</html>
