import sys
import os
from PIL import Image
from PIL import ExifTags

try:
    import objc
    from Foundation import NSURL, NSDate
    from Quartz import kCGImagePropertyExifDictionary, kCGImagePropertyTIFFDictionary, kCGImageSourceTypeIdentifierHint
    from Foundation import NSURLCreationDateKey, NSURLContentModificationDateKey
except ImportError:
    raise ImportError("You need to install pyobjc for macOS specific metadata handling.")

def get_creation_and_modification_times(filepath):
    url = NSURL.fileURLWithPath_(filepath)
    resource_values, error = url.resourceValuesForKeys_error_([NSURLCreationDateKey, NSURLContentModificationDateKey], None)
    if error:
        print(f"Error retrieving times for {filepath}: {error}")
        return None, None
    return resource_values[NSURLCreationDateKey], resource_values[NSURLContentModificationDateKey]

def set_creation_and_modification_times(filepath, creation_time, modification_time):
    url = NSURL.fileURLWithPath_(filepath)
    if creation_time:
        url.setResourceValue_forKey_error_(creation_time, NSURLCreationDateKey, None)
    if modification_time:
        url.setResourceValue_forKey_error_(modification_time, NSURLContentModificationDateKey, None)

def resize_images(input_folder, output_folder, max_resolution=(1920, 1080)):
    if not os.path.exists(output_folder):
        os.makedirs(output_folder)

    for filename in os.listdir(input_folder):
        if filename.lower().endswith(".jpg"):
            image_path = os.path.join(input_folder, filename)
            try:
                with Image.open(image_path) as img:
                    exif_data = img.info.get("exif")
                    img.thumbnail(max_resolution)
                    output_path = os.path.join(output_folder, filename)
                    img.save(output_path, "JPEG", exif=exif_data)

                    creation_time, modification_time = get_creation_and_modification_times(image_path)
                    if creation_time and modification_time:
                        set_creation_and_modification_times(output_path, creation_time, modification_time)
                    print(f"Resized: {filename}")
            except Exception as e:
                print(f"Error processing {filename}: {e}")

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: python script.py <folder>")
        sys.exit(1)

    folder = sys.argv[1]
    input_folder = f"./gallery/{folder}"
    output_folder = f"./gallery/{folder}_resized"
    resize_images(input_folder, output_folder)
