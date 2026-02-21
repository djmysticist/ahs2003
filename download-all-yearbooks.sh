#!/bin/bash
# Download all Aberdeen yearbooks (2000-2003)

BASE_URL="https://youryearbooks.com/wp-content/uploads/2021/02"
BASE_DIR="Z:/Programming/ahs2003/assets/images/yearbook"

echo "=== Downloading Aberdeen Yearbooks ==="

# 2003: aberdeen-2003-0001.jpg to aberdeen-2003-0330.jpg
echo ""
echo "=== 2003 Yearbook ==="
for i in $(seq -w 1 330); do
    url="$BASE_URL/aberdeen-2003-$i.jpg"
    out="$BASE_DIR/2003/aberdeen-2003-$i.jpg"
    curl -sf "$url" -o "$out" && echo "Downloaded: 2003-$i" || true
done

# 2002: 2002-0001.jpg to 2002-0350.jpg
echo ""
echo "=== 2002 Yearbook ==="
for i in $(seq -w 1 350); do
    url="$BASE_URL/2002-$i.jpg"
    out="$BASE_DIR/2002/2002-$i.jpg"
    curl -sf "$url" -o "$out" && echo "Downloaded: 2002-$i" || true
done

# 2001: aberdeen-2001-0001.jpg to aberdeen-2001-0410.jpg
echo ""
echo "=== 2001 Yearbook ==="
for i in $(seq -w 1 410); do
    url="$BASE_URL/aberdeen-2001-$i.jpg"
    out="$BASE_DIR/2001/aberdeen-2001-$i.jpg"
    curl -sf "$url" -o "$out" && echo "Downloaded: 2001-$i" || true
done

# 2000: Has weird naming - aberdeen-2000-2 through aberdeen-2000-2-32, then 0033+
echo ""
echo "=== 2000 Yearbook ==="
# First batch: aberdeen-2000-2.jpg through aberdeen-2000-2-32.jpg
curl -sf "$BASE_URL/aberdeen-2000-2.jpg" -o "$BASE_DIR/2000/aberdeen-2000-0001.jpg" && echo "Downloaded: 2000-0001"
for i in $(seq 1 32); do
    url="$BASE_URL/aberdeen-2000-2-$i.jpg"
    out="$BASE_DIR/2000/aberdeen-2000-$(printf '%04d' $((i+1))).jpg"
    curl -sf "$url" -o "$out" && echo "Downloaded: 2000-$(printf '%04d' $((i+1)))" || true
done
# Second batch: aberdeen-2000-0033.jpg onward
for i in $(seq -w 33 380); do
    url="$BASE_URL/aberdeen-2000-$i.jpg"
    out="$BASE_DIR/2000/aberdeen-2000-$i.jpg"
    curl -sf "$url" -o "$out" && echo "Downloaded: 2000-$i" || true
done

echo ""
echo "=== Download Complete ==="
echo "Counting files..."
echo "2000: $(ls -1 $BASE_DIR/2000/*.jpg 2>/dev/null | wc -l) images"
echo "2001: $(ls -1 $BASE_DIR/2001/*.jpg 2>/dev/null | wc -l) images"
echo "2002: $(ls -1 $BASE_DIR/2002/*.jpg 2>/dev/null | wc -l) images"
echo "2003: $(ls -1 $BASE_DIR/2003/*.jpg 2>/dev/null | wc -l) images"
