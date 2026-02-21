# Download yearbook images from youryearbooks.com
$baseUrl = "https://youryearbooks.com/wp-content/uploads/2021/02/aberdeen-2003-"
$outputDir = "Z:\Programming\ahs2003\assets\images\yearbook"

Write-Host "Downloading yearbook pages to: $outputDir"
Write-Host "Starting download..."

$downloaded = 0
$failed = 0

for ($i = 1; $i -le 330; $i++) {
    $num = $i.ToString("0000")
    $url = "$baseUrl$num.jpg"
    $outFile = "$outputDir\aberdeen-2003-$num.jpg"

    try {
        $response = Invoke-WebRequest -Uri $url -OutFile $outFile -PassThru -ErrorAction Stop
        $downloaded++
        Write-Host "Downloaded: aberdeen-2003-$num.jpg ($downloaded)"
    }
    catch {
        if ($_.Exception.Response.StatusCode -eq 404) {
            # File doesn't exist, skip silently
        } else {
            $failed++
            Write-Host "Failed: $num - $($_.Exception.Message)"
        }
    }
}

Write-Host ""
Write-Host "Complete! Downloaded: $downloaded images, Failed: $failed"
