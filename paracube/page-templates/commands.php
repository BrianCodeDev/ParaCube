<?php
/*
Template Name: Commands Page
*/
get_header(); 
?>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">All The Commands List For Players</h1>
            <hr>
        </div>
    </section>

    <div class="container mt-4">
        <h2 class="mb-3">ParaCube Towny Commands</h2>
        
        <div class="mb-3">
            <h4>Getting Started</h4>
            <ul class="list-group">
                <li class="list-group-item">/towny</li>
                <li class="list-group-item">/towny map</li>
                <li class="list-group-item">/towny top [residents|land]</li>
            </ul>
        </div>

        <div class="mb-3">
            <h4>Joining or Creating a Town</h4>
            <ul class="list-group">
                <li class="list-group-item">/town create [town-name]</li>
                <li class="list-group-item">/town join [town-name]</li>
                <li class="list-group-item">/town leave</li>
                <li class="list-group-item">/town spawn</li>
            </ul>
        </div>

        <div class="mb-3">
            <h4>Viewing Town Info</h4>
            <ul class="list-group">
                <li class="list-group-item">/town</li>
                <li class="list-group-item">/town list</li>
                <li class="list-group-item">/town [town-name]</li>
            </ul>
        </div>

        <div class="mb-3">
            <h4>Managing Your Town</h4>
            <ul class="list-group">
                <li class="list-group-item">/plot claim</li>
                <li class="list-group-item">/plot unclaim</li>
                <li class="list-group-item">/plot forsale [price]</li>
                <li class="list-group-item">/plot notforsale</li>
                <li class="list-group-item">/resident toggle plotborder</li>
            </ul>
        </div>

        <div class="mb-3">
            <h4>Managing Town Members</h4>
            <ul class="list-group">
                <li class="list-group-item">/town add [player-name]</li>
                <li class="list-group-item">/town kick [player-name]</li>
                <li class="list-group-item">/town set taxes [amount]</li>
            </ul>
        </div>

        <div class="mb-3">
            <h4>Other Useful Town Commands</h4>
            <ul class="list-group">
                <li class="list-group-item">/town set spawn</li>
                <li class="list-group-item">/town deposit [amount]</li>
                <li class="list-group-item">/town withdraw [amount]</li>
            </ul>
        </div>

        <div class="mb-3">
            <h4>Nations (For Large Communities)</h4>
            <ul class="list-group">
                <li class="list-group-item">/nation create [nation-name] [capital-town]</li>
                <li class="list-group-item">/nation</li>
                <li class="list-group-item">/nation join [nation-name]</li>
                <li class="list-group-item">/nation leave</li>
            </ul>
        </div>

        <div class="mb-3">
            <h4>Player Commands</h4>
            <ul class="list-group">
                <li class="list-group-item">/resident</li>
                <li class="list-group-item">/resident [player-name]</li>
                <li class="list-group-item">/towny prices</li>
            </ul>
        </div>
    </div>
    <div class="container mt-4">
    <h2 class="mb-3">Sign Shop Commands Guide</h2>

    <div class="card mb-3">
        <div class="card-header bg-primary text-white">📌 Setting Up a Shop</div>
        <div class="card-body">
            <ul>
                <li><strong>Step 1:</strong> Place a chest in your desired location.</li>
                <li><strong>Step 2:</strong> Attach a sign above or on the chest using the format:</li>
            </ul>
            <pre class="bg-dark text-white p-3">
[Your Minecraft Username]
Quantity of Item
Price Format
Item Name or ID
            </pre>
            <p><strong>Example (Selling 16 Diamonds for $100):</strong></p>
            <pre class="bg-dark text-white p-3">
PlayerName
16
B 100
Diamond
            </pre>
            <p>
                <strong>B</strong> = Buy (Players buy from your shop)<br>
                <strong>S</strong> = Sell (Players sell to your shop)<br>
                <strong>B/S</strong> = Buy & Sell (Both options available)
            </p>
            <p><strong>Example of Buy & Sell Shop:</strong></p>
            <pre class="bg-dark text-white p-3">
PlayerName
16
B 100:50 S
Diamond
            </pre>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-success text-white">🛒 Buying and Selling Items</div>
        <div class="card-body">
            <ul>
                <li><strong>Buying:</strong> Right-click the sign to purchase the listed item.</li>
                <li><strong>Selling:</strong> Left-click the sign to sell the listed item.</li>
                <li>Ensure you have enough money (<code>/balance</code>) or the correct items in your inventory.</li>
            </ul>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-info text-white">ℹ️ Checking Shop Information</div>
        <div class="card-body">
            <ul>
                <li>Use <code>/shopinfo</code> to get details about a shop.</li>
                <li>Sneak + Right-click the sign to see stock and pricing.</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-danger text-white">⚠️ Common Issues & Fixes</div>
        <div class="card-body">
            <ul>
                <li><strong>"Shop is out of stock"</strong> → The chest has no items left. The owner must restock.</li>
                <li><strong>"You don't have enough money"</strong> → Check your balance with <code>/balance</code>.</li>
                <li><strong>"No space in chest"</strong> → If selling, the chest must have empty slots.</li>
                <li><strong>"Invalid item"</strong> → Ensure the correct item name or ID is used.</li>
            </ul>
        </div>
    </div>

</div>

<div class="container mt-4">
    <h2 class="mb-3">Auction House Commands Guide</h2>

    <div class="card mb-3">
        <div class="card-header bg-primary text-white">🏛️ Opening the Auction House</div>
        <div class="card-body">
            <p>To access the Auction House, use the following command:</p>
            <pre class="bg-dark text-white p-3">/ah</pre>
            <p>This command allows you to:</p>
            <ul>
                <li>Browse items listed for sale.</li>
                <li>Search for specific items.</li>
                <li>Check item prices and descriptions.</li>
            </ul>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-success text-white">🛒 Buying Items</div>
        <div class="card-body">
            <ul>
                <li>Open the Auction House using <code>/ah</code>.</li>
                <li>Browse available items or use the search bar.</li>
                <li>Click on the item you want to buy.</li>
                <li>Confirm your purchase when prompted.</li>
            </ul>
            <p><strong>Tips for Buyers:</strong></p>
            <ul>
                <li>Look for deals or rare items.</li>
                <li>Check the item’s description before purchasing.</li>
            </ul>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-warning text-white">📦 Selling Items</div>
        <div class="card-body">
            <ul>
                <li>Hold the item you want to sell in your hand.</li>
                <li>Use the command: <pre class="bg-dark text-white p-3">/ah sell [price]</pre> Example: <code>/ah sell 100</code> to list an item for 100 in-game currency.</li>
                <li>Your item will now be available in the Auction House.</li>
            </ul>
            <p><strong>Notes for Sellers:</strong></p>
            <ul>
                <li>Set a fair price to attract buyers.</li>
                <li>Monitor your listings using <code>/ah listings</code>.</li>
            </ul>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-info text-white">📋 Managing Your Listings</div>
        <div class="card-body">
            <ul>
                <li><strong>View Active Listings:</strong> Type <pre class="bg-dark text-white p-3">/ah listings</pre></li>
                <li><strong>Reclaim Expired Items:</strong> Use <pre class="bg-dark text-white p-3">/ah expired</pre> to retrieve unsold items.</li>
                <li><strong>Cancel a Listing:</strong> Navigate to your item in the Auction House menu and click <strong>Cancel</strong> (if allowed by the server).</li>
            </ul>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-danger text-white">⚠️ Auction House Rules</div>
        <div class="card-body">
            <ul>
                <li>Do not spam the Auction House with unnecessary items.</li>
                <li>Avoid listing inappropriate or useless items.</li>
                <li>Follow pricing guidelines set by server admins.</li>
                <li>Read the server’s rules to avoid penalties.</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-secondary text-white">💡 Tips for New Players</div>
        <div class="card-body">
            <ul>
                <li><strong>Start Small:</strong> Sell low-value items to learn the system.</li>
                <li><strong>Check Prices:</strong> Compare similar items to find the best price.</li>
                <li><strong>Save Money:</strong> Avoid overspending on unnecessary items.</li>
            </ul>
            <p>With these tips, you’re ready to trade and build wealth in the Auction House. Happy trading! 🎉</p>
        </div>
    </div>

</div>
<br>
<br>
<br>
<div class="container">
    <h2>How to Buy a Rank or Perk on ParaCube</h2>

    <div class="step">
        <h3>Step 1: Open the Webstore</h3>
        <ul>
            <li>While in-game, type <code>/buy</code> in the chat.</li>
            <li>This command will open a link to our webstore: <strong>ParaCube Webstore</strong>.</li>
        </ul>
    </div>

    <div class="step">
        <h3>Step 2: Browse Available Ranks and Perks</h3>
        <ul>
            <li>Navigate through the categories to find:</li>
            <ul>
                <li><strong>Ranks:</strong> Unlock exclusive features and benefits.</li>
                <li><strong>Perks:</strong> Purchase specific abilities or items to enhance your gameplay.</li>
            </ul>
            <li>Click on a rank or perk to view its details.</li>
        </ul>
    </div>

    <div class="step">
        <h3>Step 3: Add to Cart</h3>
        <ul>
            <li>Once you’ve selected an item, click <strong>Add to Cart</strong>.</li>
            <li>Review your cart to ensure all desired items are included.</li>
        </ul>
    </div>

    <div class="step">
        <h3>Step 4: Proceed to Checkout</h3>
        <ul>
            <li>Click the <strong>Checkout</strong> button in your cart.</li>
            <li>Fill in the required details, including your Minecraft username.</li>
        </ul>
    </div>

    <div class="step">
        <h3>Step 5: Choose a Payment Method</h3>
        <ul>
            <li>Select your preferred payment method.</li>
            <li>Complete the payment process securely.</li>
        </ul>
    </div>

    <div class="step">
        <h3>Step 6: Receive Your Purchase</h3>
        <ul>
            <li>Once payment is successful, your rank or perk is automatically applied in-game.</li>
            <li>If there’s a delay, try re-logging into the server.</li>
        </ul>
    </div>

    <div class="step support">
        <h3>Need Help?</h3>
        <ul>
            <li>Contact us via the support ticket system on our <strong>Discord server</strong>.</li>
            <li>Provide your payment receipt and Minecraft username for faster assistance.</li>
        </ul>
    </div>

</div>



<div class="container">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title mb-4">Player Warps Guide</h2>
        <p class="lead text-center">Welcome to the guide on using the Player Warps system! This feature allows you to teleport to other players’ locations or set your own warp points in a simple and interactive way. Follow this guide to get started.</p>

        <div class="mb-4">
          <h4>Step 1: Understanding Player Warps</h4>
          <p>Player Warps are user-created teleport points. They make it easy to:</p>
          <ul>
            <li>Visit popular areas.</li>
            <li>Share your creations with others.</li>
            <li>Find and explore community builds.</li>
          </ul>
        </div>

        <div class="mb-4">
          <h4>Step 2: Accessing the Warp Menu</h4>
          <p>Log in to the ParaCube Minecraft server.</p>
          <p>Open the Player Warps menu by typing:</p>
          <pre class="bg-light p-2">/pw</pre>
          <p>This will bring up a graphical user interface (GUI) with all available warps.</p>
        </div>

        <div class="mb-4">
          <h4>Step 3: Teleporting to a Warp</h4>
          <p>Browse the GUI to see available warps. Each warp will have:</p>
          <ul>
            <li>A name or description.</li>
            <li>Information about who created it.</li>
            <li>The number of visits (popularity).</li>
          </ul>
          <p>Click on the warp you want to visit.</p>
          <p>Confirm your teleport by following any on-screen prompts.</p>
        </div>

        <div class="mb-4">
          <h4>Step 4: Creating Your Own Warp</h4>
          <p>Go to the location you want to set as your warp.</p>
          <p>Use the following command to create a warp:</p>
          <pre class="bg-light p-2">/pwcreate [warp_name]</pre>
          <p><strong>Example:</strong></p>
          <pre class="bg-light p-2">/pwcreate MyAwesomeBuild</pre>
          <p>Your warp will now appear in the Player Warps menu for others to visit.</p>
        </div>

        <div class="mb-4">
          <h4>Step 5: Managing Your Warps</h4>
          <p>To view your existing warps, type:</p>
          <pre class="bg-light p-2">/pw list</pre>
          <p>To delete a warp, use:</p>
          <pre class="bg-light p-2">/pw delete [warp_name]</pre>
          <p>To update your warp’s name or description, use:</p>
          <pre class="bg-light p-2">/pw edit [warp_name]</pre>
        </div>

        <div class="mb-4">
          <h4>Tips for Using Player Warps</h4>
          <ul>
            <li><strong>Be Descriptive:</strong> When creating a warp, give it a name that tells others what they can expect.</li>
            <li><strong>Community Rules:</strong> Ensure your warp location follows the server’s rules and is appropriate for all players.</li>
            <li><strong>Popularity:</strong> Encourage your friends to visit your warp to make it more visible in the menu.</li>
          </ul>
        </div>

        <div>
          <h4>Troubleshooting and Support</h4>
          <p>If you encounter any issues, message a staff member on our Discord server for assistance.</p>
          <p>Make sure you spell your warp names correctly when using commands.</p>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
