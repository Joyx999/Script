local key = _G.Key
local check = "https://raw.githubusercontent.com/Joyx999/Script/main/check.php?key=" .. key
if game:HttpGet(check) == "Whitelisted" then
loadstring(game:HttpGet("scripthere"))()
else
game.Players.LocalPlayer:Kick("
Check your key stupid !!!")
end
