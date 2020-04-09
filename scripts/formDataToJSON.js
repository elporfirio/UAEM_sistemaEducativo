export default function formDataToJSON(formData) {
    const data = {};
    formData.forEach((value, key) => {
        // Reflect.has in favor of: object.hasOwnProperty(key)
        if (!Reflect.has(data, key)) {
            data[key] = value;
            return;
        }
        if (!Array.isArray(data[key])) {
            data[key] = [data[key]];
        }
        data[key].push(value);
    });

    return data;
}