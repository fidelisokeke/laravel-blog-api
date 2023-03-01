<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background: #121212; color: #fff;">
    <div style="background: #1e1e1e; padding: 20px; display: flex; justify-content: space-between; align-items: center;">
        <h2 style="margin: 0; color: #0d6efd;">User Dashboard</h2>
        <button style="background: #0d6efd; color: #fff; border: none; padding: 10px 15px; cursor: pointer; border-radius: 5px;">Logout</button>
    </div>
    
    <div style="display: flex; justify-content: center; padding: 20px; gap: 20px; flex-wrap: wrap;">
        <div style="background: #1e1e1e; padding: 20px; border-radius: 10px; width: 300px; text-align: left; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <h3 style="margin-top: 0; color: #0d6efd;">Welcome, User</h3>
            <p>Email: user@example.com</p>
            <p>Account Balance: <strong>$1,200</strong></p>
            <button style="background: #0d6efd; color: #fff; border: none; padding: 10px 15px; cursor: pointer; width: 100%; border-radius: 5px;">Deposit</button>
            <button style="background: #28a745; color: #fff; border: none; padding: 10px 15px; cursor: pointer; width: 100%; margin-top: 10px; border-radius: 5px;">Withdraw</button>
        </div>
        
        <div style="background: #1e1e1e; padding: 20px; border-radius: 10px; width: 600px; text-align: left; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <h3 style="color: #0d6efd;">Latest Blogs</h3>
            <div style="border-bottom: 1px solid #444; padding-bottom: 10px; margin-bottom: 10px;">
                <h4 style="margin: 0;">How to Invest Wisely</h4>
                <p style="margin: 5px 0; color: #bbb;">Learn the best investment strategies to maximize your returns.</p>
            </div>
            <div style="border-bottom: 1px solid #444; padding-bottom: 10px; margin-bottom: 10px;">
                <h4 style="margin: 0;">Market Trends 2024</h4>
                <p style="margin: 5px 0; color: #bbb;">Stay updated with the latest market trends and predictions.</p>
            </div>
            <div>
                <h4 style="margin: 0;">Crypto Insights</h4>
                <p style="margin: 5px 0; color: #bbb;">Explore the future of cryptocurrency and blockchain technology.</p>
            </div>
        </div>
    </div>
</body>
</html>

</x-app-layout>
